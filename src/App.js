import React, { lazy, Suspense, useEffect, useState } from "react";
import { Routes, Route } from "react-router-dom";
import Header from "./components/Header/Header";
import Footer from "./components/Footer/Footer";
import { InfinitySpin } from  'react-loader-spinner';

// lazy import
const Home = lazy(() => import("./pages/Home"));
const PageNotFound = lazy(() => import("./pages/PageNotFound"));
const Packages = lazy(() => import("./pages/Packages"));
const PackageDetail = lazy(() => import("./pages/PackageDetail"));
const Buy = lazy(() => import("./pages/Buy"));
const About = lazy(() => import("./pages/About"));
const Contact = lazy(() => import("./pages/Contact"));
const Blog = lazy(() => import("./pages/Blog"));
const Sss = lazy(() => import("./pages/Sss"));
const Privacy = lazy(() => import("./pages/Privacy"));
const Cookie = lazy(() => import("./pages/Cookie"));
const Kvkk = lazy(() => import("./pages/Kvkk"));
const Altyapi = lazy(() => import("./pages/Altyapi"));


const App = () => {
  const [loading, setLoading] = useState(true);

 

  useEffect(()=> {
    setTimeout(function(){
        setLoading(false);
      }, 1000);
  }, []);

  return (
    <div className="App">
      {loading ? (
        <div className="loader">
          <h1>Netfiber</h1>
          <InfinitySpin width='200' color="#396CAD" />
        </div>
      ) : ""}
      <Header/>
      <Suspense fallback={<div className="loader">
        <h1>Netfiber</h1>
        <InfinitySpin width='200' color="#396CAD" />
        </div>}>
        <Routes>
          <Route path="/" element={ <Home/> } />
          <Route path="*" element={<PageNotFound />} />
          <Route path="/kampanyalar" element={ <Packages/> } />
          <Route path="/kampanya-detay/:id" element={ <PackageDetail/> } />
          <Route path="/satinal/:id" element={ <Buy/> } />
          <Route path="/hakkimizda" element={ <About/> } />
          <Route path="/iletisim" element={ <Contact/> } />
          <Route path="/blog" element={ <Blog/> } />
          <Route path="/sss/:id" element={ <Sss/> } />
          <Route path="/gizlilik" element={ <Privacy/> } />
          <Route path="/cerezler" element={ <Cookie/> } />
          <Route path="/kvkk" element={ <Kvkk/> } />
          <Route path="/altyapi" element={ <Altyapi/> } />
        </Routes>
      </Suspense>
      <Footer/>
    </div>
  );
}

export default App;
