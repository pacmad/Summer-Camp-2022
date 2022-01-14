import { h } from 'preact';
import style from './style.css';
import React, {useEffect, useState} from 'react';
import get_articles from '../../get_articles_cont';

function Home() {
	const articles = get_articles();
	return (
	<div class={style.home}>
		<h1 class={style.title}>Le Blog de l'été</h1>
		<img class={style.pp} src="assets/selfie_homme.jpg"></img>
			<div class={style.article}>
				<h2>{articles[0]?.title}</h2>
				<p>{articles[0]?.description}</p>
				<b>Date: {articles[0]?.date}</b>
			</div>
			<div class={style.article}>
				<h2>{articles[1]?.title}</h2>
				<p>{articles[1]?.description}</p>
				<b>Date: {articles[1]?.date}</b>
			</div>
			<div class={style.article}>
				<h2>{articles[2]?.title}</h2>
				<p>{articles[2]?.description}</p>
				<b>Date: {articles[2]?.date}</b>
			</div>
	</div>
	);
}

export default Home;
