import { h } from 'preact';
import style from './style.css';
import get_articles from '../../get_articles_cont';
// import BlogList from './BlogList';
// import useFetch from './useFetch';
// https://flatlogic.com/blog/how-to-build-a-blog-on-react/ -> Import les articles

const Home = () => (
	<div class={style.home}>
		<h1 class={style.title}>Le Blog de l'été</h1>
		<img class={style.pp} src="assets/selfie_homme.jpg"></img>
		<p class={style.title}>Ceci est un test: {get_articles.data}</p>
	</div>
);

export default Home;
