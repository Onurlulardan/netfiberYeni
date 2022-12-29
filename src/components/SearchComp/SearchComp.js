import React, { useEffect, useState } from 'react';
import styles from './SearchComp.module.css';
import { Link } from 'react-router-dom';

import man from '../../assets/img/altyapiimg.png';

const SearchComp = ({ search }) => {
    const API = process.env.REACT_APP_MY_API;
    const IMG_PATH = process.env.REACT_APP_IMG_PATH;
    const [sss, setSss] = useState([]);
    const [searchValue, setSearchValue] = useState('');

    const getSss = async () => {
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

    useEffect(()=> {
        getSss();
    }, []);


  return (
    <div className={styles.searchCover}>
        <div onClick={()=> {search()}} className={styles.searchCloseBtn}>
            <i className="ri-close-circle-line"></i>
        </div>
        <h1 className={styles.header}>Size nasıl yardımcı olabiliriz?</h1>
        <label className={styles.inputCover}>
            <input onChange={(e)=> {setSearchValue(e.target.value)}} type={'text'} placeholder={'Aradığınızı kısaca yazabilirsiniz'} />
            <div className={styles.inpSearchIcon}>
                <i className="ri-search-line"></i>
            </div>
        </label>
        <section className={styles.headerTitleCover}>
            <div className={styles.headerTitle}>
                {sss && sss.filter((item)=> {
                    return item.sss_title.toLocaleLowerCase().includes(searchValue.toLocaleLowerCase())
                }).map((item, index)=> {
                    return (
                    <div key={index} className={styles.headerTitleItem}>
                        <Link to={`/sss/${item.id}`} target={'_top'}> {item.sss_title} </Link>
                    </div>
                    )
                })}
            </div>
        </section>
        <div>
            <img src={man} />
        </div>
    </div>
  )
}

export default SearchComp