import { h } from 'preact';
import style from './style.css';
import React, {useEffect, useState} from 'react';
import get_articles from '../../get_articles_cont';

function Article({ nb_article }) {
	console.log(nb_article)
	const articles = get_articles();
	return (
		<div class={style.home}>
			<div class={style.article}>
				<h2 class={style.art_title}>{articles[nb_article]?.title}</h2>
				<p class={style.art_undertitle}>{articles[nb_article]?.date}</p>
				<p>{articles[nb_article]?.description}</p>
			</div>
		</div>
	);
}

export default Article;