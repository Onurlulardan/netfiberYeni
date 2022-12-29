import React from 'react';
import styles from '../assets/css/Blog.module.css';

import blogdetails from '../assets/img/blogdetail.png';

const Blog = () => {
  return (
    <main>
        <section className={styles.pageContainer}>  
            <img src={blogdetails} loading={'lazy'}/>
            <div className={styles.pageContainerText}>
                <div className={styles.pageContainerTextHeader}>
                    <div className={styles.pageContainerTextHeaderSocial}>
                        <div><i className="ri-facebook-fill"></i></div>
                        <div><i className="ri-twitter-fill"></i></div>
                        <div><i className="ri-whatsapp-fill"></i></div>
                    </div>
                </div>
                <div className={styles.pageText}>
                    <h1> Arkadaşlarını NetsFiber’e Davet Et, Daha Az Fatura Öde! </h1>
                    <p> Arkadaşını Getir Kampanyası, davet kodunuz ile referans olarak Netspeed’e kazandırdığınız her bir yeni abonelik için 12 aylık fatura dönemi boyunca hem sizin hem de arkadaşınızın her faturasında 10’ar TL indirim hakkı kazanmanızı sağlayan bir kampanyadır.

                    Size özel referans kodunuz ile davet etmiş olduğunuz arkadaşınız davet kodunu abonelik başlatırken başvuru esnasında 444 0 217 Numaralı Başvuru Hattı üzerinden satış temsilcimize beyan etmesi veya web sitemiz üzerinde yer alan abone başvuru formunu doldururken “referans kodu” alanına sizin verdiğiniz kodu yazması yeterlidir.

                    Bu kampanya, aksi belirtilmedikçe başka indirim kampanyaları ile birleştirilemez.
                    Kampanyadan kazandığınız ilgili aya ait indirimleri kullanabilmeniz için sizin ve referansınızla abone olan arkadaşlarınızın gecikmiş fatura borcu bulunmaması gerekmektedir.
                    Kazanılan indirimler bir sonraki fatura döneminde yansıtılır.
                    Kampanya 01.01.2023 tarihine kadar geçerlidir.
                    </p>
                    <a href={`whatsapp://send?text="Netfiber'de Her Şey Net => https://netfiber.com.tr/;" "&t='' data-action='share/whatsapp/share`}>Bu Sayfayı Paylaş</a>
                </div>
            </div>
        </section>
        {/* <section className={styles.sssSection}>
        <div className={styles.sssHeader}>
        <div><h1>Kampanya Koşulları</h1></div>
        </div>
        <div className={styles.sssAccordionCover}>
        <div className={`${styles.sssAccordionItem} group`} tabIndex="0">
            <div className={styles.sssAccordionTop}>
            <div className={styles.sssAccordionHeader}><h1>Nasıl Abone Olabilirim?</h1></div>
            <div className={`${styles.sssAccordionIcon} group-focus:text-[#76797C]`}>
                <i className="ri-add-circle-line group-focus:hidden"></i>
                <i className="ri-indeterminate-circle-line hidden group-focus:block"></i>
                </div>
            </div>
            <div className={`${styles.sssAccordionContent} hidden group-focus:block`}>
            <p>
            • Fiyatlarımıza %18 KDV ve %10 ÖİV dahildir. Vergi oranında değişiklik yapılması durumunda Millenicom, vergi farkını müşteriye yansıtma hakkını saklı tutar. • Kampanya taahhütsüz olarak sunulmakta olup sadece yeni başvuru yapmış olan Millenicom müşterisi için geçerlidir. Mevcut Millenicom müşterileri bu kampanyadan faydalanamaz. • Millenicom internet ve/veya telefon hizmetini Türk Telekomünikasyon A.Ş. altyapısı üzerinden sunacaktır. • Kampanya kapsamında yeni bağlantılarda 210 TL’lik evde kurulum ücreti 3 taksitte ilk 3 faturaya yansıtılacaktır.• Hat taşıma (geçiş) yapıldığı taktirde evde kurulum ücreti alınmayacakır. Geçiş işleminde modem kurulumu için gerekli olan kullanıcı adı ve şifre sms olarak paylaşılacaktır. Adsl, Vdsl ve Ankastreye Kadar Fiber Altyapısında (FTTB) vdsl modem kullanılması gerekmektedir. •Adsl, Vdsl ve Ankastreye Kadar Fiber Altyapısında (FTTB) vdsl modem kullanılması gerekmektedir. Modem satışı opsiyonel olup ; 30TL x 24 ay, 50 TL x 12 ay veya peşin 500 TL seçenekleri mevcuttur. Vdsl modem satın alındıktan sonra müşteriye ait olacaktır. Taksitler bitmeden iptal olması durumunda, kalan taksitler son faturaya yansıtılır. 
            </p>
            </div>
        </div>
        <div className={`${styles.sssAccordionItem} group`} tabIndex="0">
            <div className={styles.sssAccordionTop}>
            <div className={styles.sssAccordionHeader}><h1>Adresimde Net Fiber Var Mı?</h1></div>
            <div className={`${styles.sssAccordionIcon} group-focus:text-[#76797C]`}>
                <i className="ri-add-circle-line group-focus:hidden"></i>
                <i className="ri-indeterminate-circle-line hidden group-focus:block"></i>
                </div>
            </div>
            <div className={`${styles.sssAccordionContent} hidden group-focus:block`}>
            <p>
            • Fiyatlarımıza %18 KDV ve %10 ÖİV dahildir. Vergi oranında değişiklik yapılması durumunda Millenicom, vergi farkını müşteriye yansıtma hakkını saklı tutar. • Kampanya taahhütsüz olarak sunulmakta olup sadece yeni başvuru yapmış olan Millenicom müşterisi için geçerlidir. Mevcut Millenicom müşterileri bu kampanyadan faydalanamaz. • Millenicom internet ve/veya telefon hizmetini Türk Telekomünikasyon A.Ş. altyapısı üzerinden sunacaktır. • Kampanya kapsamında yeni bağlantılarda 210 TL’lik evde kurulum ücreti 3 taksitte ilk 3 faturaya yansıtılacaktır.• Hat taşıma (geçiş) yapıldığı taktirde evde kurulum ücreti alınmayacakır. Geçiş işleminde modem kurulumu için gerekli olan kullanıcı adı ve şifre sms olarak paylaşılacaktır. Adsl, Vdsl ve Ankastreye Kadar Fiber Altyapısında (FTTB) vdsl modem kullanılması gerekmektedir. •Adsl, Vdsl ve Ankastreye Kadar Fiber Altyapısında (FTTB) vdsl modem kullanılması gerekmektedir. Modem satışı opsiyonel olup ; 30TL x 24 ay, 50 TL x 12 ay veya peşin 500 TL seçenekleri mevcuttur. Vdsl modem satın alındıktan sonra müşteriye ait olacaktır. Taksitler bitmeden iptal olması durumunda, kalan taksitler son faturaya yansıtılır. 
            </p>
            </div>
        </div>
        <div className={`${styles.sssAccordionItem} group`} tabIndex="0">
            <div className={styles.sssAccordionTop}>
            <div className={styles.sssAccordionHeader}><h1>Kampanya Koşulları</h1></div>
            <div className={`${styles.sssAccordionIcon} group-focus:text-[#76797C]`}>
                <i className="ri-add-circle-line group-focus:hidden"></i>
                <i className="ri-indeterminate-circle-line hidden group-focus:block"></i>
                </div>
            </div>
            <div className={`${styles.sssAccordionContent} hidden group-focus:block`}>
            <p>
            • Fiyatlarımıza %18 KDV ve %10 ÖİV dahildir. Vergi oranında değişiklik yapılması durumunda Millenicom, vergi farkını müşteriye yansıtma hakkını saklı tutar. • Kampanya taahhütsüz olarak sunulmakta olup sadece yeni başvuru yapmış olan Millenicom müşterisi için geçerlidir. Mevcut Millenicom müşterileri bu kampanyadan faydalanamaz. • Millenicom internet ve/veya telefon hizmetini Türk Telekomünikasyon A.Ş. altyapısı üzerinden sunacaktır. • Kampanya kapsamında yeni bağlantılarda 210 TL’lik evde kurulum ücreti 3 taksitte ilk 3 faturaya yansıtılacaktır.• Hat taşıma (geçiş) yapıldığı taktirde evde kurulum ücreti alınmayacakır. Geçiş işleminde modem kurulumu için gerekli olan kullanıcı adı ve şifre sms olarak paylaşılacaktır. Adsl, Vdsl ve Ankastreye Kadar Fiber Altyapısında (FTTB) vdsl modem kullanılması gerekmektedir. •Adsl, Vdsl ve Ankastreye Kadar Fiber Altyapısında (FTTB) vdsl modem kullanılması gerekmektedir. Modem satışı opsiyonel olup ; 30TL x 24 ay, 50 TL x 12 ay veya peşin 500 TL seçenekleri mevcuttur. Vdsl modem satın alındıktan sonra müşteriye ait olacaktır. Taksitler bitmeden iptal olması durumunda, kalan taksitler son faturaya yansıtılır. 
            </p>
            </div>
        </div>
        <div className={`${styles.sssAccordionItem} group`} tabIndex="0">
            <div className={styles.sssAccordionTop}>
            <div className={styles.sssAccordionHeader}><h1>Adresimde ne kadar hız alabilirim?</h1></div>
            <div className={`${styles.sssAccordionIcon} group-focus:text-[#76797C]`}>
                <i className="ri-add-circle-line group-focus:hidden"></i>
                <i className="ri-indeterminate-circle-line hidden group-focus:block"></i>
                </div>
            </div>
            <div className={`${styles.sssAccordionContent} hidden group-focus:block`}>
            <p>
            • Fiyatlarımıza %18 KDV ve %10 ÖİV dahildir. Vergi oranında değişiklik yapılması durumunda Millenicom, vergi farkını müşteriye yansıtma hakkını saklı tutar. • Kampanya taahhütsüz olarak sunulmakta olup sadece yeni başvuru yapmış olan Millenicom müşterisi için geçerlidir. Mevcut Millenicom müşterileri bu kampanyadan faydalanamaz. • Millenicom internet ve/veya telefon hizmetini Türk Telekomünikasyon A.Ş. altyapısı üzerinden sunacaktır. • Kampanya kapsamında yeni bağlantılarda 210 TL’lik evde kurulum ücreti 3 taksitte ilk 3 faturaya yansıtılacaktır.• Hat taşıma (geçiş) yapıldığı taktirde evde kurulum ücreti alınmayacakır. Geçiş işleminde modem kurulumu için gerekli olan kullanıcı adı ve şifre sms olarak paylaşılacaktır. Adsl, Vdsl ve Ankastreye Kadar Fiber Altyapısında (FTTB) vdsl modem kullanılması gerekmektedir. •Adsl, Vdsl ve Ankastreye Kadar Fiber Altyapısında (FTTB) vdsl modem kullanılması gerekmektedir. Modem satışı opsiyonel olup ; 30TL x 24 ay, 50 TL x 12 ay veya peşin 500 TL seçenekleri mevcuttur. Vdsl modem satın alındıktan sonra müşteriye ait olacaktır. Taksitler bitmeden iptal olması durumunda, kalan taksitler son faturaya yansıtılır. 
            </p>
            </div>
        </div>
        </div>
        </section> */}
    </main>
  )
}

export default Blog