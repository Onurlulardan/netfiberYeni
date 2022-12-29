import React, { useEffect, useState } from 'react';
import { Swiper, SwiperSlide } from 'swiper/react';
import { Navigation, Pagination, A11y, EffectCards, EffectCoverflow } from "swiper";
import styles from '../assets/css/Home.module.css';
import { Link } from 'react-router-dom';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import "swiper/css/effect-cards";
import "swiper/css/effect-coverflow";
import ModalForm from '../components/ModalForm/ModalForm';
import Swal from 'sweetalert2';
import withReactContent from 'sweetalert2-react-content';


// import img1 from '../assets/img/sliderimg1.png';
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

import applybg from '../assets/img/applybg.svg';
import mkalp from '../assets/img/mkalp.svg';
import tchart from '../assets/img/tchart.svg';
import tflame from '../assets/img/tflame.svg';
import ping from '../assets/img/ping.svg';

import inviteimg from '../assets/img/inviteimg.png';

import iprice from '../assets/img/iprice.svg';
import ipriceh from '../assets/img/ipriceh.svg';
import itah from '../assets/img/itah.svg';
import itahh from '../assets/img/itahh.svg';
import ilimit from '../assets/img/ilimit.svg';
import ilimith from '../assets/img/ilimith.svg';
import itel from '../assets/img/itel.svg';
import itelh from '../assets/img/itelh.svg';

import gsearch from '../assets/img/gsearch.svg';
import gsearchh from '../assets/img/gsearchh.svg';

import altyapiimg from '../assets/img/altyapiimg.png';

import mappre from '../assets/img/mappre.svg';
import mapafter from '../assets/img/mapafter.svg';



const Home = () => {
  const API = process.env.REACT_APP_MY_API;
  const IMG_PATH = process.env.REACT_APP_IMG_PATH;
  const maxLenghts = 140;

  const [sliderData, setSliderData] = useState([]);
  const [campainData, setCampainData] = useState([]);
  const [review, setReview] = useState([]);
  const [sss, setSss] =useState([]);
  const [headerData, setHeaderData] = useState([]);

  // const [modalOpen, setModalOpen] = useState(false);
  const [validationState, setValidationState] = useState([]);
  const MySwal = withReactContent(Swal);

  const getSlider = async () => {
    try {
      
      const response = await fetch(`${API}/General/GetSlider`);
      const json = await response.json();
      
      if(response.ok) {
        setSliderData(json.Data)
      }
    } catch (error) {
      console.log(error)
    }
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

  const getCampain = async () => {
    try {
      
      const response = await fetch(`${API}/General/GetCampaign`);
      const json = await response.json();
      
      if(response.ok) {
        setCampainData(json.Data);
      }

    } catch (error) {
      console.log(error)
    }
  }

  const getReview = async () => {
    try {
      const response = await fetch(`${API}/General/GetCustomerComments`);
      const json = await response.json();
      if(response.ok){
        setReview(json.Data);
      }
      
    } catch (error) {
      console.log(error)
    }
  }

  const getSss = async () => {
    try {
      
      const response = await fetch(`${API}/General/GetSSS`);
      const json = await response.json();

      if(response.ok) {
        setSss(json.Data);
      }
    } catch (error) {
      console.log(error)
    }
  }

  // const modalFormOpen = () => {
  //   setModalOpen(!modalOpen);
  // }

  useEffect(()=> {
    getSlider();
    getHeaderColor();
    getCampain();
    getReview();
    getSss();

    // window.addEventListener('load', () => {
    //   setTimeout(() => {
    //     modalFormOpen();
    //   },5000);
    // }, false);
    
  }, []);

  return (
    <main className={styles.page}>
      {/* { modalOpen === true ? ( 
       <div className={styles.modalformCover}> <ModalForm modalFormOpen={modalFormOpen} />  </div>
      ) : '' } */}
      <section className={`${styles.swiperSection} swiper-section`} >
      <Swiper
        modules={[Navigation, Pagination, A11y]}
        loop={true}
        autoplay={true}
        spaceBetween={0}
        slidesPerView={1}
        className={styles.myFirstSwiper}
        navigation= {{
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        }}
        pagination={{ clickable: true, el: '.swiper-pagination' }}
      >
        {sliderData && sliderData.map((item, index)=> {
          return (
          <SwiperSlide key={index} style={{background: headerData.header_color} || {background: '#396CAD'}}>
            <div className={styles.sliderItem}>
                <div className={styles.sliderText}>
                  <h1> {item.slider_text} </h1>
                  <Link to={`/altyapi`} target={'_top'} className={styles.sliderLink} >Hemen Başvuru Yap</Link>
                </div>
                <div className={styles.sliderImgCover}>
                    <img src={`${IMG_PATH}slider/${item.img_path}`} />
                </div>
            </div>
          </SwiperSlide>
          )
        })}
      </Swiper>
        <div className={styles.swiperButtonCover}>
          <div className="swiper-button-prev">
          </div>
          <div className="swiper-button-next">
          </div>
        </div>
        <div className={styles.swiperPeginationCover}>
            <div className="swiper-pagination"></div>
          </div>
      </section>
      <section className={styles.campainSection}>
        <div className={styles.campainHeader}>
          <Link to={'/kampanyalar'} target={'_top'}>Popüler Kampanyalar</Link>
        </div>
          <div className={styles.campainItemCover}>
            {campainData && campainData.slice(0, 2).map((item, index)=> {
              return (
                  <div key={index} className={styles.campainSliderItem}>
                <div className={styles.campainSliderImg}>
                  <img className={styles.campainSliderImgPc} src={`${IMG_PATH}${item.img_path}`} loading={'lazy'} />
                  <img className={styles.campainSliderImgMobile} src={ `${IMG_PATH}${item.mobile_img_path}`} loading={'lazy'} />
                </div>
                <div>
                  <div className={styles.campainInfoHeader}>
                    <h1  className={item.campaign_title.toLocaleLowerCase().includes('fiber') ? 'text-mor' : 'text-turuncu'}>{ item.campaign_title.substring(0,maxLenghts) + '...' }</h1>
                    <h6>Sadece / <span className={item.campaign_title.toLocaleLowerCase().includes('fiber') ?'text-mor text-[36px] font-extrabold pl-2': 'text-turuncu text-[36px] font-extrabold pl-2'}> { item.price }<span className='text-[23px] font-semibold'>TL</span> </span></h6>
                  </div>
                  <div className={styles.campainInfoCover}>
                    <div className={styles.campainInfoItem}>
                      <img src={item.campaign_title.toLocaleLowerCase().includes('fiber') ? mdown : tdown} loading={'lazy'}/>
                      <div className={styles.campainInfoText}>
                        <h3> {item.download_info} </h3>
                        <p>İndirme Hızı (Download)</p>
                      </div>
                    </div>
                    <div className={styles.campainInfoItem}>
                      <img src={item.campaign_title.toLocaleLowerCase().includes('fiber') ? mup : tup}  loading={'lazy'}/>
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
      <section className={styles.applySection}>
        <div className={styles.applyCover}>
          <div className={styles.applyText}>
          <h1>Taahhütsüz, kotasız internet 
            sahibi olmak için</h1>
            <Link to={`/altyapi`} target={'_top'} >Hemen Başvuru Yap</Link>
          </div>
          <div className={styles.appylImg}>
            <img src={applybg} loading={'lazy'} />
            <img className={styles.mkalp} src={mkalp} loading={'lazy'} />
            <img className={styles.tflame} src={tflame} loading={'lazy'} />
            <img className={styles.tchart} src={tchart} loading={'lazy'} />
            <div className={styles.applyUp}>
              <h5><i className="ri-arrow-up-line"></i> Upload </h5>
              <p>6 Mb/s</p>
            </div>
            <div className={styles.applyPing}>
              <h5><img src={ping} loading={'lazy'} /> Ping </h5>
              <p>14 ms</p>
            </div>
          </div>
        </div>
      </section>
      <section className={styles.inviteSection}>
        <img src={inviteimg} loading={'lazy'} />
        <div className={styles.inviteText}>
          <h1>Arkadaşlarını Davet Et <br/> Bir ay ücret ödeme!</h1>
          <p>NetFiber’e arkadaşlarını davet et mevcut hizmet süren bir ay uzasın! Kullanma sınırı yok ne kadar çok arkadaşınızı davet ederseniz okadar çok ay kazanabilirsiniz.</p>
          <Link to={'/blog'} target={'_top'}>Arkadaşını Davet Et</Link>
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
              <img className='group-hover:hidden' src={itah} loading={'lazy'} />
              <img className='hidden group-hover:block' src={itahh} loading={'lazy'} />
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
      <section className={styles.altyapiSection}>
        <div className={styles.altyapiCover}>
          <img src={altyapiimg} loading={'lazy'} />
          <div className={styles.altyapiText}>
            <h1>Altyapı Sorgula</h1>
            <p>İster ev adresiniz ile ister telefon numaranız ile altyapınızı sorgulayın. </p>
          </div>
            <Link className='group' to={'/altyapi'} target={'_top'}>
              <div className={styles.altyapiBtn}>
                  <img className='group-hover:hidden' src={gsearch} loading={'lazy'}/>
                  <img className='hidden group-hover:block' src={gsearchh} loading={'lazy'}/>
                  Altyapı Sorgula 
              </div>
            </Link>
        </div>
      </section>
      <section className={styles.secondSliderSection}>
        <div className={styles.secondSliderHeader}>
          <h1>Kullanıcılarımızın Düşünceleri</h1>
        </div>
        <Swiper
        effect={"coverflow"}
        autoplay={{
          delay: 2500,
          disableOnInteraction: false,
        }}
        grabCursor={true}
        slidesPerView={'auto'}
        coverflowEffect={{
          rotate: 0,
          stretch: 50,
          depth: 140,
          modifier: 3,
          slideShadows: false,
        }}
        observer={true}
        observeParents={true}
        pagination={{ clickable: true, el: '.second-swiper-pagination' }}
        modules={[EffectCoverflow, Pagination]}
        className={`${styles.mySecondSwiper} mySecondSwiper`}
        centeredSlides={true}
        >
        {review && review.map((item, index)=> {
            return (
              <SwiperSlide key={index}>
                <div className={styles.secondSliderItem}>
                  <div className={styles.puan}>
                    <i className="ri-star-fill"></i> { parseFloat(item.score).toFixed(1) }
                  </div>
                  <p> { item.comment_desc } </p>
                  <h4> { item.name_surname } </h4>
                  <h5>NetFiber Kullanıcısı</h5>
                </div>
              </SwiperSlide>
            )
          })}
      </Swiper>
      <div className={styles.secondSwiperPeginationCover}>
          <div className="second-swiper-pagination"></div>
      </div>
      </section>
      <section className={styles.mapSection}>
        <div className={styles.mapText}>
          <h1>Yüksek Genişbant Ağı</h1>
          <p>NetFiber tüm Türkiye’de yüksek  teknolojiden oluşan çevre dostu 5 ghz wifi ağı ile yüksek genişbant hizmetini kullanıcılarına sunmaktadır.</p>
          <Link to={'/'}>Kapsama Alanlarımız</Link>
        </div>
        <div className={`${styles.mapImage} group`}>
          <img className='group-hover:hidden' src={mappre} loading={'lazy'}/>
          <img className='hidden group-hover:block' src={mapafter} loading={'lazy'} />
        </div>
      </section>
      <section className={styles.sssSection}>
        <div className={styles.sssHeader}>
          <h1>Sıkça Sorulan Sorular</h1>
        </div>
        <div className={styles.sssAccordionCover}>
          {sss && sss.map((item, index)=> {
            return (
            <div key={index} className={`${styles.sssAccordionItem} group`} tabIndex="0">
              <div className={styles.sssAccordionTop}>
                <div className={styles.sssAccordionHeader}><h1> {item.sss_title} </h1></div>
                <div className={`${styles.sssAccordionIcon} group-focus:text-[#76797C]`}>
                  <i className="ri-add-circle-line group-focus:hidden"></i>
                  <i className="ri-indeterminate-circle-line hidden group-focus:block"></i>
                  </div>
              </div>
              <div className={`${styles.sssAccordionContent} hidden group-focus:block`}>
                <p>
                { item.sss_desc }
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

export default Home