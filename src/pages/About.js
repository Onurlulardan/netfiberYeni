import React, { useEffect, useState } from 'react';
import styles from '../assets/css/About.module.css';


import aboutimg from '../assets/img/aboutimg.png';
import qualityimg from '../assets/img/qualityimg.png';

const About = () => {
  const API = process.env.REACT_APP_MY_API;
  const IMG_PATH = process.env.REACT_APP_IMG_PATH;
  const [aboutData, setAboutData] = useState([]);

  const getAboutData = async () => {
    try {
        const response = await fetch(`${API}/general/getabout`);
        const json = await response.json();

        setAboutData(json.Data);
    } catch (error) {
        console.log(error)
    }
  }

  useEffect(()=> {
    getAboutData();
  }, []);

  return (
    <main>
        <section className={styles.aboutSection}>
            <div className={styles.aboutTop}>
                <div className={styles.aboutTextwithImg}>
                    <img src={`${IMG_PATH}${aboutData.about_img}`} loading={'lazy'} />
                    <div className={styles.aboutText}>
                        <h1> {aboutData.about_title} </h1>
                        <p dangerouslySetInnerHTML={{__html: aboutData.about_desc}} /> 
                    </div>
                </div>
                <div className={`${styles.aboutTextwithImg} ${styles.aboutTextwithImgbottom}`}>
                    <div className={styles.aboutText}>
                        <h1> {aboutData.mission_title} </h1>
                        <p dangerouslySetInnerHTML={{ __html: aboutData.mission_desc }} /> 
                    </div>
                    <img src={`${IMG_PATH}${aboutData.mission_img}`} loading={'lazy'} />
                </div>
            </div>
            <div className={styles.aboutBottom}>
                <div className={styles.aboutBottomText}>
                    <h1> {aboutData.vision_title} </h1>
                    <p dangerouslySetInnerHTML={{ __html: aboutData.vision_desc }} />
                </div>
                <div className={styles.aboutBottomText}>
                    <h1> {aboutData.license_title} </h1>
                    <div dangerouslySetInnerHTML={{ __html: aboutData.license_desc }} />
                    {/* <ul>
                        <li>Altyapı İşletmeciliği Hizmeti – Ulusal</li>
                        <li>İnternet Servis Sağlayıcılığı – Ulusal</li>
                        <li>Denetim Mercii: Bilgi Teknolojileri ve İletişim Kurumu</li>
                        <li>Mersis No: 0631 0761 8350 0022</li>
                        <li>Kuruluş: 2013</li>
                    </ul> */}
                </div>
            </div>
        </section>
    </main>
  )
}

export default About