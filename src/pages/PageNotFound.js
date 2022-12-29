import React from 'react';
import { Link } from 'react-router-dom';

function PageNotFound() {
  return (
    <main class="h-full my-16 w-full flex flex-col justify-center items-center bg-white">
        <h1 class="text-9xl font-extrabold text-lacivert tracking-widest">404</h1>
        <div class="bg-turuncu px-2 text-sm rounded rotate-12 absolute text-white">
            Sayfa Bulunamadı!
        </div>
        <button class="mt-5">
        <a
            class="relative inline-block text-sm font-medium text-white group active:text-turuncu focus:outline-none focus:ring"
        >
            <span class="relative block px-8 py-3 bg-turuncu border border-current rounded-[9px] hover:bg-white text-white hover:text-turuncu">
            <Link to="/">Anasayfaya Dön</Link>
            </span>
        </a>
        </button>
    </main>
  )
}

export default PageNotFound