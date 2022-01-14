import { h } from 'preact';
import React, {useEffect, useState} from 'react';
import axios from 'axios';

function get_articles() {

    const [test, setTest] = useState({});
    
    useEffect(() => {
        async function fetchData() {
            var { argos } = await axios.get('http://localhost:8000/articles/articles.php?get=true');
            if (!argos)
                argos = await axios.get('http://localhost:8000/articles/articles.php?get=true')
            await setTest(argos.data.articles);
        }
        fetchData();
    }, []);
    return (test);
}

export default get_articles;