import React, { useEffect, useState } from 'react';
import styles from '../assets/css/Contact.module.css';
import { Formik, Form, Field, ErrorMessage } from 'formik';
import Swal from 'sweetalert2';
import withReactContent from 'sweetalert2-react-content';

const Contact = () => {
    const API = process.env.REACT_APP_MY_API;
    const IMG_PATH = process.env.REACT_APP_IMG_PATH;
    const [validationState, setValidationState] = useState([]);
    const [contactData, setContactData] = useState([]);
    const MySwal = withReactContent(Swal);

    const getContact = async () => {
        try {
            const response = await fetch(`${API}/General/GetSetting`);
            const json = await response.json();

            if(response.ok){
                setContactData(json.Data);
            }
        } catch (error) {
            console.log(error);
        }
    }
    useEffect(()=> {
        getContact();
    }, []);

  return (
    <main>
        <section className={styles.pageContent}>
            <div className={styles.contentText}>
                <div className={styles.contentTextHeader}>
                    <h1>Bize yazın,</h1>
                    <p>Tüm istek, görüş ve önerilerinizi bizimle iletişime geçerek bildirebilirsiniz.</p>
                </div>
                <div className={styles.contentTextItem}>
                    <h1>Adres</h1>
                    <p> {contactData.adres} </p>
                    <h1>Telefon</h1>
                    <a href={`tel:${contactData.phone1}`} > {contactData.phone1} </a>
                    <h1>Eamil</h1>
                    <a href={`mailto:bilgi@netfiber.com.tr`}> {contactData.email} </a>
                    <h1>Harita</h1>
                    <a className={styles.contentTextItemMap} href={`https://www.google.com/maps/search/?api=1&query=${contactData.geo_lat},${contactData.geo_long}`} target="blank">Görüntüle <i className="ri-map-pin-line"></i></a>
                    <div className={styles.pagerSocialIcon}>
                        <a href={contactData.instagram} target="blank">
                            <div><i className="ri-instagram-line"></i></div>
                        </a>
                        <a href={contactData.facebook} target="blank">
                            <div><i className="ri-facebook-fill"></i></div>
                        </a>
                        <a href={contactData.twitter} target="blank">
                            <div><i className="ri-twitter-fill"></i></div>
                        </a>
                        <a href={contactData.linkedin} target="blank">
                            <div><i className="ri-linkedin-fill"></i></div>
                        </a>
                    </div>
                </div>
            </div>
                <Formik
                initialValues={{ nameSurname: '', email: '', phone: '', message: '' }}
                validateOnChange={false}
                validateOnBlur={false}
                validate={values => {
                    const errors = {};
                    if(!values.nameSurname){
                        errors.nameSurname = ' * Boş Bırakılamaz!'
                    }

                    if (!values.email) {
                        errors.email = ' * Boş Bırakılamaz!';
                    } else if (!/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i.test(values.email)) {
                        errors.email = 'Lütfen Geçerli Bir Mail Adresi Giriniz!';
                    }

                    if(!values.phone){
                        errors.phone = ' * Boş Bırakılamaz!'
                    }

                    if(!values.message){
                        errors.message = ' * Boş Bırakılamaz!'
                    }
                    setValidationState(errors)
                    return errors
                }}
                onSubmit={(values, { resetForm })=> {
                    fetch(`${API}/general/MessageSave?name_surname=${values.nameSurname}&email=${values.email}&phone=${values.phone}&message=${values.message}`, {
                        method: 'POST',
                        body: values
                    }).then(response => {
                        resetForm({ values: '' });
                        return response.json();
                    }).then(data => {
                        if(data.Status === true){
                            MySwal.fire({
                                icon: 'success',
                                title: 'başarılı',
                                text: 'İşlem Başarılı Bir Şekilde Gerçekleşti',
                                showConfirmButton: false,
                                timer: 2000
                            })
                        } else {
                            MySwal.fire({
                                icon: 'error',
                                title: 'Bir Hata Oluştu',
                                text: 'Lütfen Tekrar Deneyiniz!',
                                showConfirmButton: false,
                                timer: 2000
                            })
                        }
                    }).catch(err => {
                        console.log(err);
                    })
                }}
                >
                {({isSubmitting})=> (
                    <Form>
                        <div className={styles.contentForm}>
                            <label htmlFor="name">
                                <p>Ad Soyad</p>
                                { validationState.nameSurname ? (
                                    <h6 className='error-state'> {validationState.nameSurname} </h6>
                                ) : '' }
                                <Field type="nameSurname" name="nameSurname" className={validationState.nameSurname  ? 'border-none outline outline-2 outline-[#FF3838]' : ''} />
                            </label>
                            <label htmlFor="tel">
                                <p>E-mail Adresi</p>
                                { validationState.email ? (
                                    <h6 className='error-state'> {validationState.email} </h6>
                                ) : '' }
                                <Field type="email" name="email" className={validationState.email  ? 'border-none outline outline-2 outline-[#FF3838]' : ''} />
                            </label>
                            <label htmlFor="tel">
                                <p>Telefon Numarası</p>
                                { validationState.phone ? (
                                    <h6 className='error-state'> {validationState.phone} </h6>
                                ) : '' }
                                <Field type="phone" name="phone" className={validationState.phone  ? 'border-none outline outline-2 outline-[#FF3838]' : ''} />
                            </label>
                            <label htmlFor="msg">
                                <p>Mesajınız</p>
                                { validationState.message ? (
                                    <h6 className='error-state'> {validationState.message} </h6>
                                ) : '' }
                                <Field component="textarea" type="message" name="message" className={validationState.message  ? 'border-none outline outline-2 outline-[#FF3838]' : ''} />
                            </label>
                            <div>
                                <button type="submit" disabled={isSubmitting}>Gönder</button>
                            </div>
                        </div>
                    </Form>
                )}
                </Formik>
        </section>
    </main>
  )
}

export default Contact