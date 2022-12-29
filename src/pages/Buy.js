import React, {useState} from 'react';
import styles from '../assets/css/Buy.module.css';
import { Formik, Form, Field, ErrorMessage } from 'formik';
import { Link, Navigate, useParams } from 'react-router-dom';
import Swal from 'sweetalert2';
import withReactContent from 'sweetalert2-react-content';

import applybg from '../assets/img/applybg.svg';
import mkalp from '../assets/img/mkalp.svg';
import tchart from '../assets/img/tchart.svg';
import tflame from '../assets/img/tflame.svg';
import ping from '../assets/img/ping.svg';

const Buy = () => {
    const API = process.env.REACT_APP_MY_API;
    const [validationState, setValidationState] = useState([]);
    const params = useParams();
    const MySwal = withReactContent(Swal);

  return (
    <main>
        <section className={styles.buySection}>
            <div className={styles.buyForm}>
                <Formik 
                initialValues={{campainid: params.id,  loginfo: '', loginmail: '', logintel: '', ayndinlatma: false, kvkk: false}}
                validateOnChange={false}
                validateOnBlur={false}
                validate={values => {
                    const errors = {};
                    if(!values.loginfo) {
                        errors.loginfo = ' * Boş Bırakılamaz!'
                    }

                    if (!values.loginmail) {
                        errors.loginmail = ' * Boş Bırakılamaz!';
                      } else if (!/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i.test(values.loginmail)) {
                        errors.loginmail = 'Lütfen Geçerli Bir Mail Adresi Giriniz!';
                      }

                    if(!values.logintel) {
                        errors.logintel = ' * Boş Bırakılamaz!'
                    }

                    if (!values.ayndinlatma) {
                        errors.ayndinlatma = ' * Metni onaylamanız gerekiyor!';
                    }
    
                    if (!values.kvkk) {
                    errors.kvkk = ' * Metni onaylamanız gerekiyor!';
                    }
                    setValidationState(errors);
                    return errors
                }}
                onSubmit={(values, { resetForm }) => {
                    fetch(`${API}/general/PackageRefernce?campaign_id=${values.campainid}&name_surname=${values.loginfo}&email=${values.loginmail}&phone=${values.logintel}`, {
                        method: 'POST',
                        body: values,
                    }).then(response => {
                            resetForm({ values: '' })
                            return response.json()
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
                {({isSubmitting}) => (
                    <Form>
                        <h1 className={styles.bundleFormTextHeader}>Paket hakkında detaylı bilgi almak için bizimle <br/>
                        iletişime geçebilirsiniz </h1>
                        <div className={styles.bundleFormInput}>
                            <label htmlFor="loginfo">
                                <p>Ad Soyad</p>
                                { validationState.loginfo ? (
                                    <h6 className='error-state'> {validationState.loginfo} </h6>
                                ) : ""}
                                <Field type="name" name="loginfo" className={validationState.loginfo  ? 'border-none outline outline-2 outline-[#FF3838]' : ''} />
                            </label>
                            <label htmlFor="loginmail">
                                <p>E-mail</p>
                                { validationState.loginmail ? (
                                    <h6 className='error-state'> {validationState.loginmail} </h6>
                                ) : ""}
                                <Field type="name" name="loginmail" className={validationState.loginmail  ? 'border-none outline outline-2 outline-[#FF3838]' : ''} />
                            </label>
                            <label htmlFor="logintel">
                                <p>Telefon</p>
                                { validationState.logintel ? (
                                    <h6 className='error-state'> {validationState.logintel} </h6>
                                ) : ""}
                                <Field type="name" name="logintel" className={validationState.logintel  ? 'border-none outline outline-2 outline-[#FF3838]' : ''} />
                            </label>
                            <label htmlFor="ayndınlatma">
                                { validationState.ayndinlatma ? (
                                    <h6 className='error-state'> {validationState.ayndinlatma} </h6>
                                ) : ""}
                                <div className={styles.bundleFormInputCheckbox}>
                                <Field type="checkbox" name="ayndinlatma" />
                                <Link to='/privacy' target={'_blank'}>Kişisel veri aydınlatma metnini okudum ve anladım.</Link>
                                </div>
                            </label>
                            <label htmlFor="ayndınlatma">
                                { validationState.kvkk ? (
                                    <h6 className='error-state'> {validationState.kvkk} </h6>
                                ) : ""}
                                <div className={styles.bundleFormInputCheckbox}>
                                <Field type="checkbox" name="kvkk" />
                                <Link to='/kvkk' target={'_blank'}>Kişisel verilerimin işlenmesine izin veriyorum.</Link>
                                </div>
                            </label>
                            <div className={styles.bundleFormAydinlatmaMetni}>
                                <p>
                                Abonelik formunu tamamlamadığınız durumda sadece bir sefer NetFiber’in avantajlarını anlatan ve kaldığınız yerden başvurunuza devam edebilmenizi sağlayan bir e-posta göndereceğiz ve en fazla iki hafta içinde sizi bir defaya mahsus arayacağız. Bu sürede NetFiber’li olmazsanız, tüm kişisel verilerinizi imha edip sizinle tekrar başvuru yapana kadar iletişim kurmayacağız.
                                </p>
                            </div>
                            <div className={styles.bundleFormButton}>
                                <button type="submit" disabled={isSubmitting} >Başvuru Yap</button>
                            </div>
                        </div>
                    </Form>
                )}
                </Formik>
            </div>
            <div className={styles.appylImg}>
                <img src={applybg} loading={'lazy'} />
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
        </section>
    </main>
  )
}

export default Buy