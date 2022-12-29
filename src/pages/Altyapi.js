import React from 'react';
import styles from '../assets/css/Altyapi.module.css';

const Altyapi = () => {
  return (
    <main>
        <section className='container mx-auto flex justify-center items-start'>
            <iframe scrolling="no" className={styles.frameCover} src="https://www.netfiber.com.tr/deneme/altyapi.php" 
            frameBorder={0}>
            </iframe>
        </section>
    </main>
  )
}

export default Altyapi