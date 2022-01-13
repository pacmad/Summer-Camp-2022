import { h } from 'preact';
import style from './style.css';
import get_articles from '../../get_articles_cont.js';

const Home = () => (
	get_articles()
	// <div class={style.home}>
	// 	<h1 class={style.title}>Le Blog de l'été</h1>
	// 	<img class={style.pp} src="assets/selfie_homme.jpg"></img>
	// 	{/* <p class={style.title}>Ceci est un test: {get_articles}</p> */}
	// </div>
);

export default Home;
