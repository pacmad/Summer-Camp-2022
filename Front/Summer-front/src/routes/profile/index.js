import { h } from 'preact';
import {useEffect, useState} from "preact/hooks";
import style from './style.css';

// Note: `user` comes from the URL, courtesy of our router
const Profile = ({ user }) => {
	// const [time, setTime] = useState(Date.now());
	// const [count, setCount] = useState(10);

	// useEffect(() => {
	// 	let timer = setInterval(() => setTime(Date.now()), 1000);
	// 	return () => clearInterval(timer);
	// }, []);

	return (
		<div class={style.profile}>
			<h1>Salut! Je suis {user}, bienvenue sur mon Blog!</h1>
			<img class={style.pp_profile} src="../../assets/selfie_homme.jpg"></img>
			<div class={style.rectangle}>
				<p>Salut à tous! Moi c'est Jhon Pierre Paul Jacques De La Saucisse De Strasbourg! Enchanté!</p>
			</div>
			{/* <div>Current time: {new Date(time).toLocaleString()}</div> */}

			{/* <p>
				<button onClick={() => setCount((count) => count + 1)}>Click Me</button>
				{' '}
				Clicked {count} times.
			</p> */}
		</div>
	);
}

export default Profile;
