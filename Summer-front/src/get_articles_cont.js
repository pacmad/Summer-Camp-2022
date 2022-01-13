import { h } from 'preact';
import React, {useEffect, useState} from 'react';
import axios from 'axios';

function get_articles() {

    const [data, setData] = useState('');
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    useEffect(async () => {
        await axios('http://localhost:8000/articles/articles.php?get=true')
        .then(response => {
            setData(response.data);
        })
        .catch(error => {
            console.error("Error fetching articles: ", error);
            setError(error);
        })
        .finally(() =>{
            setLoading(false);
        })
    })

    if (loading) return "Loading...";
    if (error) return "Error!";
    
    return (
        <div class={style.home}>
            <h1 class={style.title}>Le Blog de l'été</h1>
            <img class={style.pp} src="assets/selfie_homme.jpg"></img>
            <p class={style.title}>Ceci est un test: {data}</p>
	    </div>
    );
}

export default get_articles;