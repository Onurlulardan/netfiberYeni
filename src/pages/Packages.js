import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import styles from '../assets/css/Packages.module.css';

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

const Packages = () => {
  const API = process.env.REACT_APP_MY_API;
  const IMG_PATH = process.env.REACT_APP_IMG_PATH;
  const maxLenghts = 140;

  const [campainData, setCampainData] = useState([]);


  const getCampain = async () => {
    try {
      const response = await fetch(`${API}/General/GetCampaign`);
      const json = await response.json();

      if(response.ok){
        setCampainData(json.Data);
      }
    } catch (error) {
      console.log(error)
    }
  }

  useEffect(()=> {
    getCampain();
  }, []);

  return (
    <main>
        <section className={styles.campainSection}>
          <div className={styles.campainItemCover}>
            {campainData && campainData.slice(0, 2).map((item, index)=> {
              return (
                  <div key={index} className={styles.campainSliderItem}>
                <div className={styles.campainSliderImg}>
                  <img className={styles.campainSliderImgPc} src={`${IMG_PATH}${item.img_path}`} loading={'lazy'} />
                  <img className={styles.campainSliderImgMobile} src={`${IMG_PATH}${item.mobile_img_path}`} loading={'lazy'} />
                </div>
                <div>
                  <div className={styles.campainInfoHeader}>
                    <h1  className={item.campaign_title.toLocaleLowerCase().includes('fiber') ? 'text-mor' : 'text-turuncu'}>{ item.campaign_title.substring(0,maxLenghts) + '...' }</h1>
                    <h6>Sadece / <span className={item.campaign_title.toLocaleLowerCase().includes('fiber') ?'text-mor text-[36px] font-extrabold pl-2': 'text-turuncu text-[36px] font-extrabold pl-2'}> { item.price }<span className='text-[23px] font-semibold'>TL</span> </span></h6>
                  </div>
                  <div className={styles.campainInfoCover}>
                    <div className={styles.campainInfoItem}>
                      <img src={item.campaign_title.toLocaleLowerCase().includes('fiber') ? mdown : tdown} loading={'lazy'} />
                      <div className={styles.campainInfoText}>
                        <h3> {item.download_info} </h3>
                        <p>İndirme Hızı (Download)</p>
                      </div>
                    </div>
                    <div className={styles.campainInfoItem}>
                      <img src={item.campaign_title.toLocaleLowerCase().includes('fiber') ? mup : tup} loading={'lazy'} />
                      <div className={styles.campainInfoText}>
                        <h3> { item.upload_info } </h3>
                        <p>Yükleme Hızı (Upload)</p>
                      </div>
                    </div>
                    <div className={styles.campainInfoItem}>
                      <img src={item.campaign_title.toLocaleLowerCase().includes('fiber') ? mtah : ttah} loading={'lazy'} />
                      <div className={styles.campainInfoText}>
                        <h3> { item.commit_info} </h3>
                        <p>Dilediğin Zaman İptal Et!</p>
                      </div>
                    </div>
                    <div className={styles.campainInfoItem}>
                      <img src={item.campaign_title.toLocaleLowerCase().includes('fiber') ? mlimit : tlimit} loading={'lazy'} />
                      <div className={styles.campainInfoText}>
                        <h3> { item.limit_info } </h3>
                        <p>Gerçek Sınırsız İnternet</p>
                      </div>
                    </div>
                  </div>
                  <Link to={`/kampanya-detay/${item.id}`} target={'_top'}>
                    <div className={item.campaign_title.toLocaleLowerCase().includes('fiber') ? styles.campainInfoBtnM : styles.campainInfoBtn }>
                      İncele
                    </div>
                  </Link>
                </div>
              </div>
              )
            })}
          </div>
        </section>
        <section className={styles.infoSection}>
        <div className={`${styles.infoItem} group`}>
          <div className={`${styles.infoIconBgOutline} group-hover:bg-mavi`}>
            <div className={`${styles.infoIconBg} group-hover:bg-white`}>
              <img className='group-hover:hidden' src={iprice} loading={'lazy'} />
              <img className='hidden group-hover:block' src={ipriceh} loading={'lazy'} />
            </div>
          </div>
          <h1 className='group-hover:text-white'>Uygun Fiyat</h1>
          <p className='group-hover:text-white'>Aynı altyapı aynı internet aynı fiber hizmetini daha uygun fiyata sunuyoruz.</p>
        </div>
        <div className={`${styles.infoItem} group`}>
          <div className={`${styles.infoIconBgOutline} group-hover:bg-mavi`}>
            <div className={`${styles.infoIconBg} group-hover:bg-white`}>
              <img className='group-hover:hidden' src={itah} />
              <img className='hidden group-hover:block' src={itahh} />
            </div>
          </div>
          <h1 className='group-hover:text-white'>Taahhüt</h1>
          <p className='group-hover:text-white'>Tüm tariflerimizi ister taahhütsüz ister 12-24 ay taahütlü olarak alabilirsiniz. </p>
        </div>
        <div className={`${styles.infoItem} group`}>
          <div className={`${styles.infoIconBgOutline} group-hover:bg-mavi`}>
            <div className={`${styles.infoIconBg} group-hover:bg-white`}>
              <img className='group-hover:hidden' src={ilimit} loading={'lazy'} />
              <img className='hidden group-hover:block' src={ilimith} loading={'lazy'} />
            </div>
          </div>
          <h1 className='group-hover:text-white'>Gerçek Sınırsız</h1>
          <p className='group-hover:text-white'>Kota yada diğer servis sağlayıcıların tabiri ile smart kota yok. Tamamen sınırsız.</p>
        </div>
        <div className={`${styles.infoItem} group`}>
          <div className={`${styles.infoIconBgOutline} group-hover:bg-mavi`}>
            <div className={`${styles.infoIconBg} group-hover:bg-white`}>
              <img className='group-hover:hidden' src={itel} loading={'lazy'} />
              <img className='hidden group-hover:block' src={itelh} loading={'lazy'} />
            </div>
          </div>
          <h1 className='group-hover:text-white'>7/24 Destek</h1>
          <p className='group-hover:text-white'>Dakikalarca beklemeden müşteri hizmetlerimize kolayca ulaşıp destek ve bilgi alabilirsiniz.</p>
        </div>
      </section>
    </main>
  )
}

export default Packages