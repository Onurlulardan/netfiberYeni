import React, { useEffect, useState } from 'react';
import styles from '../assets/css/Privacy.module.css';
import { Link } from 'react-router-dom';

const Privacy = () => {
  const API = process.env.REACT_APP_MY_API;
  const IMG_PATH = process.env.REACT_APP_IMG_PATH;
  const [privacy, setPrivacy] = useState([]);

  
const getPrivacy = async () => {
    try {
        const response = await fetch(`${API}/General/GetContractDetail?contract_id=1`);
        const json = await response.json();

        if(response.ok){
            setPrivacy(json.Data);
        }
    } catch (error) {
        console.log(error);
    }
}
useEffect(()=> {
    getPrivacy();
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
                <h1 className={styles.pageContentHeader}> {privacy.title} </h1>
                <p className={styles.pageContentText} dangerouslySetInnerHTML={{__html: privacy.desc}} /> 
            </div>
        </section>
    </main>
  )
}

export default Privacy