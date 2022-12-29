import React, { useEffect, useState } from 'react';
import {Link} from "react-router-dom";
import styles from './Header.module.css';
import SearchComp from '../SearchComp/SearchComp';


import Logo from "../../assets/img/logo_beyaz.svg";
import hamburgermenu from "../../assets/img/hamburgermenu.svg";
import hamburgermenuclose from "../../assets/img/hamburgermenuclose.svg";

const Header = () => {
    const API = process.env.REACT_APP_MY_API;
    const IMG_PATH = process.env.REACT_APP_IMG_PATH;
    const [show, setShow] = useState(false);
    const [headerData, setHeaderData] = useState([]);
    const [showSearch, setShowSearch] = useState(false);

    const mobilemenu = () => {
        setShow(!show);
        const main = document.querySelector('main');
        main?.classList.toggle('mobileMennuShow');
    }

    const getHeaderColor = async () => {
        try {
            const response = await fetch(`${API}/general/GetSetting`);
            const json = await response.json();
            if(response.ok) {
                setHeaderData(json.Data);
            }
        } catch (error) {
            console.log(error)
        }
    }

    const search = () => {
        setShowSearch(!showSearch);
    }

    useEffect(()=> {
        getHeaderColor();
    }, []);

  return (
    <header style={{background: headerData.header_color} || {background: '#396CAD'}}>
        {showSearch === true ? (
            <div className={styles.searchCompCover}> <SearchComp search={search} /> </div>
        ) : ''}
        <div className={styles.headerItem}>
            <div className={styles.headerLogo}>
                <Link to={'/'}>
                    <img src={`${IMG_PATH}${headerData.logo_path}`}/>
                </Link>
            </div>
            <nav className={styles.navigation}>
                <div className={styles.navigationItem}>
                    <Link className={styles.links} to={'/kampanyalar'} target={'_top'} >Kampanyalar</Link>
                    <Link className={styles.links} to={'/altyapi'} target={'_top'}>Altyapı Sorgula</Link>
                    <Link className={styles.links} to={'/hakkimizda'} target={'_top'}>Hakkımızda</Link>
                    <Link className={styles.links} to={'/iletisim'} target={'_top'}>Destek</Link>
                    <button onClick={() => {search()}} className={styles.links} to={'/'} target={'_top'}> <i className="ri-search-line"></i> </button>
                    <a className={styles.btn} href="https://www.netfiber.com.tr/oim/"  target={'_blank'}>Online İşlemler</a>
                </div>
            </nav>
            <nav onClick={()=> {mobilemenu()}} className={styles.navigationMobile}>
                { show === true ? (
                    <img src={hamburgermenuclose} />
                ) : (
                    <img src={hamburgermenu} />
                ) }
            </nav>
        </div>
        {show === true ? (
        <div className={styles.navigationMobileMenu}>
            <div className={styles.navigationMobileMenuItemCover}>
                <div className={styles.navigationMobileMenuItem}>
                    <Link className={styles.links} to={'/kampanyalar'}  target={'_top'}>Kampanyalar</Link>
                    <Link className={styles.links} to={'/altyapi'} target={'_top'}>Altyapı Sorgula</Link>
                    <Link className={styles.links} to={'/hakkimizda'} target={'_top'}>Hakkımızda</Link>
                    <Link className={styles.links} to={'/iletisim'} target={'_top'}>Destek</Link>
                </div>
                <div className={styles.navigationMobileMenuItem}>
                    <a className={styles.btn} href="https://www.netfiber.com.tr/oim/" target={'_blank'}>Online İşlemler</a>
                </div>
            </div>
        </div>
        ) : ''}
    </header>
  )
}

export default Header