import { h } from 'preact';
import React, {useEffect, useState} from 'react';
import axios from 'axios';

function get_articles() {

    const [data, setData] = useState(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    useEffect(() => {
        axios('http://localhost:8080/api/articles/articles.php')
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
}

export default get_articles;