import React, { useEffect, useState } from 'react';
import { Link, useParams } from 'react-router-dom';
import styles from '../assets/css/Sss.module.css';

const Sss = () => {
  const API = process.env.REACT_APP_MY_API;
  const IMG_PATH = process.env.REACT_APP_IMG_PATH;
  const params = useParams();
  const [sss, setSss] = useState([]);
  const [ID, setID] = useState();

  const getSss = async ()=> {
    try {
      const response = await fetch(`${API}/General/GetSSS`);
      const json = await response.json();

      if(response.ok) {
        setSss(json.Data);
      }
    } catch (error) {
      console.log(error);
    }
  }
 let a = params.id;

  useEffect(()=> {
    setID(params.id);
    getSss();
    console.log(params.id)
  }, []);


  return (
    <main>
        <section className={styles.pageHeader}>
            <h1>Sık Sorulan Sorular</h1>
            <h4>Yardıma mı ihtiyacınız var?</h4>
        </section>
        <section className={styles.headerTitleCover}>
            <div className={styles.headerTitle}>
                { sss && sss.map((item, index)=> {
                  return (
                    <button key={index}>
                      <div onClick={(e) => {setID(item.id)}} className={styles.headerTitleItem}>
                          {item.sss_title} 
                      </div>
                    </button>
                  )
                }) }
            </div>
        </section>
        <section className={styles.sssSection}>
        <div className={styles.sssAccordionCover}>
          { sss && sss.map((item, index)=> {
            return (
              <div key={index} className={`${styles.sssAccordionItem} group`} tabIndex="0">
                <div className={styles.sssAccordionTop}>
                  <div className={styles.sssAccordionHeader}><h1> {item.sss_title} </h1></div>
                  <div className={`${styles.sssAccordionIcon} group-focus:text-[#76797C]`}>
                    <i className={item.id == ID ? `ri-add-circle-line hidden` : `ri-add-circle-line group-focus:hidden`}></i>
                    <i className={item.id == ID ? `ri-indeterminate-circle-line block` : `ri-indeterminate-circle-line hidden group-focus:block`}></i>
                    </div>
                </div>
                <div className={item.id == ID ? `${styles.sssAccordionContentShow}` : `${styles.sssAccordionContent} group-focus:block`}>
                  <p> {item.sss_desc} </p>
                </div>
              </div>
            )
          }) }
        </div>
        </section>
    </main>
  )
}

export default Sss