import React, {useState} from 'react';
import styles from './ModalForm.module.css';
import { Formik, Form, Field, ErrorMessage } from 'formik';
import { Link } from 'react-router-dom';

import modalimg from '../../assets/img/modalimg.png'

const ModalForm = ({ modalFormOpen }) => {
    const [validationState, setValidationState] = useState([]);

  return (
    <div className={styles.buyForm}>
        <div className={styles.modalImg}>
            <img src={modalimg} />
        </div>
        <Formik 
        initialValues={{ loginfo: '', password: '', ayndinlatma: false, kvkk: false}}
        validateOnChange={false}
        validateOnBlur={false}
        validate={values => {
            const errors = {};
            if(!values.loginfo) {
                errors.loginfo = ' * Boş Bırakılamaz!'
            }

            if (!values.password) {
                errors.password = ' * Boş bırakılamaz!';
                } else if (values.password.length < 8) {
                errors.password = ' * Şifreniz en az 8 karakter olmalı!';
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
        onSubmit={(values, { setSubmitting }) => {
            setTimeout(() => {
            alert(JSON.stringify(values, null, 2));
            console.log("tıklandı")
            setSubmitting(false);
            }, 400);
        }}
        >
        {({isSubmitting}) => (
            <Form>
                <div className={styles.modalFormHeaderCover}>
                    <div> 
                    <h1 className={styles.bundleFormTextHeader}>Müşteri Temsilcimiz Online,
                    <br/>
                    Hemen Başvur Arayalım! </h1>  </div>
                    <div className={styles.modalFormHeaderCloseBtn} onClick={(e)=> { modalFormOpen() }} > <i className="ri-close-circle-line"></i>  </div>
                </div>
                <div className={styles.bundleFormInput}>
                    <label htmlFor="loginfo">
                        <p>Müşteri Numarası, TC Kimlik Numarası veya  GSM Numarası</p>
                        { validationState.loginfo ? (
                            <h6 className='error-state'> {validationState.loginfo} </h6>
                        ) : ""}
                        <Field type="name" name="loginfo" className={validationState.loginfo  ? 'border-none outline outline-2 outline-[#FF3838]' : ''} />
                    </label>
                    <label htmlFor="password">
                        <p>Şifreniz</p>
                        { validationState.password ? (
                            <h6 className='error-state'> {validationState.password} </h6>
                        ) : ""}
                        <Field type="password" name="password" className={validationState.password  ? 'border-none outline outline-2 outline-[#FF3838]' : ''} />
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
                    {/* <div className={styles.bundleFormAydinlatmaMetni}>
                        <p>
                        Abonelik formunu tamamlamadığınız durumda sadece bir sefer NetFiber’in avantajlarını anlatan ve kaldığınız yerden başvurunuza devam edebilmenizi sağlayan bir e-posta göndereceğiz ve en fazla iki hafta içinde sizi bir defaya mahsus arayacağız. Bu sürede NetFiber’li olmazsanız, tüm kişisel verilerinizi imha edip sizinle tekrar başvuru yapana kadar iletişim kurmayacağız.
                        </p>
                    </div> */}
                    <div className={styles.bundleFormButton}>
                        <button type="submit" disabled={isSubmitting} >Başvuru Yap</button>
                    </div>
                </div>
            </Form>
        )}
        </Formik>
    </div>
  )
}
export default ModalForm