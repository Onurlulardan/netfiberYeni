import React, {useState, useEffect} from 'react';
import styles from '../assets/css/Privacy.module.css';
import { Link } from 'react-router-dom';

const Kvkk = () => {
    const API = process.env.REACT_APP_MY_API;
    const IMG_PATH = process.env.REACT_APP_IMG_PATH;
    const [kvkk, setKvkk] = useState([]);
  
    
  const getKvkk = async () => {
      try {
          const response = await fetch(`${API}/General/GetContractDetail?contract_id=3`);
          const json = await response.json();
  
          if(response.ok){
            setKvkk(json.Data);
          }
      } catch (error) {
          console.log(error);
      }
  }
  useEffect(()=> {
    getKvkk();
  }, []);

  return (
    <main>
        <section className={styles.headerTitleCover}>
            <div className={styles.headerTitle}>
                <Link to={'/gizlilik'} target={'_top'}>
                    <div className={styles.headerTitleItem}>
                    Gizlilik
                </div>
                </Link>
                <Link to={'/cerezler'} target={'_top'}> 
                <div className={styles.headerTitleItem}>
                    Çerez Politikası 
                </div>
                </Link>
                <Link to={'/kvkk'} target={'_top'}>
                <div className={styles.headerTitleItem}>
                     Kişisel Verilerin Korunması 
                </div>
                </Link>
            </div>
        </section>
        <section className={styles.pageContentCover}>
            <div className={styles.pageContent}>
                <h1 className={styles.pageContentHeader}> {kvkk.title} </h1>
                <p className={styles.pageContentText} dangerouslySetInnerHTML={{__html: kvkk.desc}} />
            </div>
        </section>
    </main>
  )
}

export default Kvkk