import React, {useState, useEffect} from 'react';
import styles from './Footer.module.css';
import { Link } from 'react-router-dom';

import footerbg from '../../assets/img/footerbg.svg';
import logo from '../../assets/img/logo_beyaz.svg';
import phone from '../../assets/img/phone.svg';
import adadijital from '../../assets/img/adadijital.svg';

const Footer = () => {
    const API = process.env.REACT_APP_MY_API;
    const IMG_PATH = process.env.REACT_APP_IMG_PATH;
    const [footerData, setFooterData] = useState([]);

    const getFooterColor = async () => {
        try {
            const response = await fetch(`${API}/general/GetSetting`);
            const json = await response.json();
            if(response.ok) {
                setFooterData(json.Data);
            }
        } catch (error) {
            console.log(error)
        }
    }

    useEffect(()=> {
        getFooterColor();
    }, []);
    
  return (
    <footer className={styles.footer} style={{background: footerData.footer_color} || {background: '#396CAD'}}>
        <main className={styles.footerContent}>
            <div>
                <img className='max-w-[255px] md:max-w-[132px] sm:max-w-[200px]' src={`${IMG_PATH}${footerData.logo_path}`} />
            </div>
            <div className={styles.footerContentMid}>
                <div className={styles.footerSocialIconCover}>
                    <div className={styles.footerSocialIconMobile}>
                        <h1>Bizi Takip Edin</h1>
                        <div>
                            <a href={footerData.instagram} target={'_blank'}><i className="ri-instagram-line"></i></a>
                            <a href={footerData.facebook} target={'_blank'}><i className="ri-facebook-fill"></i></a>
                            <a href={footerData.twitter} target={'_blank'}><i className="ri-twitter-fill"></i></a>
                            <a href={footerData.linkedin} target={'_blank'}><i className="ri-linkedin-fill"></i></a>
                        </div>
                    </div>
                    <div className={styles.footerBottomLinkMobileTop}>
                        <Link to={'/gizlilik'} target={'_top'}> Gizlilik <span>|</span> </Link> 
                        <Link to={'/cerezler'} target={'_top'}> Çerez Politikası <span>|</span> </Link> 
                        <Link to={'/kvkk'} target={'_top'}> Kişisel Verilerin Korunması </Link>
                    </div>
                </div>
                <div className={styles.footerContentLink}>
                    <Link to={'/iletisim'} target={'_top'}>Bize Ulaşın</Link>
                    <Link to={'/hakkimizda'} target={'_top'}>Hakkımızda</Link>
                    <Link to={'/kampanyalar'} target={'_top'}>Fiber İnternet</Link>
                    <Link to={'/kampanyalar'} target={'_top'}>Fiber İnternet</Link>
                </div>
                <div className={styles.footerContentLink}>
                    <Link to={'/altyapi'} target={'_top'}>Altyapı Sorgula</Link>
                    <a href={'https://www.netfiber.com.tr/oim/'} target={'_blank'}>Online Başvuru</a>
                    <Link to={'/blog'} target={'_top'}>Arkadaşını Getir</Link>
                    <Link to={'/iletisim'} target={'_top'}>Destek</Link>
                    <Link to={'/sss/1'} target={'_top'}>S.S.S</Link>
                </div>
                <div className={styles.footerContentPhone}>
                    <img src={phone} />
                    <div>
                        <a href={`tel:${footerData.phone1}`}>{footerData.phone1}</a>
                        <p>Satış ve Başvuru Takip</p>
                    </div>
                </div>
            </div>
            <div className={styles.footerSocialIcon}>
                <h1>Bizi Takip Edin</h1>
                <div>
                    <a href={footerData.instagram} target={'_blank'}><i className="ri-instagram-line"></i></a>
                    <a href={footerData.facebook} target={'_blank'}><i className="ri-facebook-fill"></i></a>
                    <a href={footerData.twitter} target={'_blank'}><i className="ri-twitter-fill"></i></a>
                    <a href={footerData.linkedin} target={'_blank'}><i className="ri-linkedin-fill"></i></a>
                </div>
            </div>
        </main>
        <section className={styles.footerBottom}>
            <div className={styles.footerBottomLink}>
                <Link to={'/'}>© 2022 NetFiber <span>-</span> </Link>
                <Link to={'/gizlilik'} target={'_top'}> Gizlilik <span>|</span> </Link> 
                <Link to={'/cerezler'} target={'_top'}> Çerez Politikası <span>|</span> </Link> 
                <Link to={'/kvkk'} target={'_top'}> Kişisel Verilerin Korunması </Link>
            </div>
            <div className={styles.footerBottomLinkMobile}>
                <Link to={'/'}>© 2022 NetFiber </Link> 
            </div>
            <div>
                <a href='https://adadijital.com/' target={'_blank'}>
                    <img src={adadijital} />
                </a>
            </div>
        </section>
    </footer>
  )
}

export default Footer