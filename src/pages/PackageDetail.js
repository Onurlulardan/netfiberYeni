import React, { useEffect, useState } from 'react';
import { Link, useParams } from 'react-router-dom';
import styles from '../assets/css/PackageDetail.module.css';

import orangeImage from '../assets/img/campainorange.png';
import purpleImage from '../assets/img/campainpurple.png';
import orangeImageMobile from '../assets/img/campainorangemobile.png';
import purpleImageMobile from '../assets/img/campainpurplemobile.png';

import tdown from '../assets/img/tdown.svg';
import tup from '../assets/img/tup.svg';
import ttah from '../assets/img/ttah.svg';
import tlimit from '../assets/img/tlimit.svg';
import mdown from '../assets/img/mdown.svg';
import mup from '../assets/img/mup.svg';
import mtah from '../assets/img/mtah.svg';
import mlimit from '../assets/img/mlimit.svg';

import iprice from '../assets/img/iprice.svg';
import ipriceh from '../assets/img/ipriceh.svg';
import itah from '../assets/img/itah.svg';
import itahh from '../assets/img/itahh.svg';
import ilimit from '../assets/img/ilimit.svg';
import ilimith from '../assets/img/ilimith.svg';
import itel from '../assets/img/itel.svg';
import itelh from '../assets/img/itelh.svg';

import campaindetail from '../assets/img/campaindetail.png';

const PackageDetail = () => {
  const API = process.env.REACT_APP_MY_API;
  const IMG_PATH = process.env.REACT_APP_IMG_PATH;
  const params = useParams();

  const [campainByID, setCampainByID] = useState([]);
  const [sss, setSss] = useState([]);

  const getCampainByID = async () => {
    try {
      const response = await fetch(`${API}/General/GetCampaign`);
      const json = await response.json();

      if(response.ok) {
       
        setCampainByID(json.Data);
      }
    } catch (error) {
      console.log(error)
    }
  }
 
  const getSss = async () => {
    try {
      const response = await fetch(`${API}/General/GetSSS`);
      const json = await response.json();

      if(response.ok){
        setSss(json.Data);
      }
    } catch (error) {
      console.log(error);
    }
  }

  useEffect(() => {
    getCampainByID();
    getSss();
  }, []);

  return (
    <main>
        <section className={styles.campainSection}>
          <div className={styles.campainItemCover}>
            { campainByID && campainByID.filter((item) => {
              if(item.id.toString() === params.id.toString()){
                return item
              }
            }).map((item, index)=> {
              return (
                <div key={index} className={styles.campainSliderItem}>
                  <div className={styles.campainSliderImg}>
                    <img className={styles.campainSliderImgPc} src={campaindetail} loading={'lazy'} />
                    <img className={styles.campainSliderImgMobile} src={orangeImageMobile} loading={'lazy'} />
                  </div>
                  <div>
                    <div className={styles.campainInfoHeader}>
                      <h1> {item.campaign_title} </h1>
                      <h6>Sadece / <span className='text-turuncu text-[36px] font-extrabold pl-2'> {item.price} <span className='text-[23px] font-semibold'>TL</span> </span></h6>
                    </div>
                    <div className={styles.campainInfoCover}>
                      <div className={styles.campainInfoItem}>
                        <img src={tdown} loading={'lazy'} />
                        <div className={styles.campainInfoText}>
                          <h3> {item.download_info} </h3>
                          <p>İndirme Hızı (Download)</p>
                        </div>
                      </div>
                      <div className={styles.campainInfoItem}>
                        <img src={tup} loading={'lazy'} />
                        <div className={styles.campainInfoText}>
                          <h3> {item.upload_info} </h3>
                          <p>Yükleme Hızı (Upload)</p>
                        </div>
                      </div>
                      <div className={styles.campainInfoItem}>
                        <img src={ttah} loading={'lazy'} />
                        <div className={styles.campainInfoText}>
                          <h3> {item.commit_info} </h3>
                          <p>Dilediğin Zaman İptal Et!</p>
                        </div>
                      </div>
                      <div className={styles.campainInfoItem}>
                        <img src={tlimit} loading={'lazy'} />
                        <div className={styles.campainInfoText}>
                          <h3> {item.limit_info} </h3>
                          <p>Gerçek Sınırsız İnternet</p>
                        </div>
                      </div>
                    </div>
                    <Link to={`/satinal/${item.id}`} target={'_top'}>
                    <div className={styles.campainInfoBtn}>
                      Başvuru Yap
                    </div>
                    </Link>
                  </div>
                </div>
              )
            }) }
          </div>
        </section>
        <section className={styles.sssSection}>
        <div className={styles.sssHeader}>
          <Link to={'/sss'} target={'_top'}>Sıkça Sorulan Sorular</Link>
        </div>
        <div className={styles.sssAccordionCover}>
          {sss && sss.map((item, index) => {
            return (
              <div key={index} className={`${styles.sssAccordionItem} group`} tabIndex="0">
                <div className={styles.sssAccordionTop}>
                  <div className={styles.sssAccordionHeader}><h1>{item.sss_title}</h1></div>
                  <div className={`${styles.sssAccordionIcon} group-focus:text-[#76797C]`}>
                    <i className="ri-add-circle-line group-focus:hidden"></i>
                    <i className="ri-indeterminate-circle-line hidden group-focus:block"></i>
                    </div>
                </div>
                <div className={`${styles.sssAccordionContent} hidden group-focus:block`}>
                  <p>
                  {item.sss_desc}
                  </p>
                </div>
              </div>
            )
          })}
        </div>
        </section>
    </main>
  )
}

export default PackageDetail