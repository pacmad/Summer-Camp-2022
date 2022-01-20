import { h } from 'preact';
import { Link } from 'preact-router/match';
import style from './style.css';

const Header = () => (
	<header class={style.header}>
		<h1>Mon super blog!</h1>
		<nav>
			<Link activeClassName={style.active} href="/">Home</Link>
			<Link activeClassName={style.active} href="/profile/Jhon">Profile</Link>
			<Link activeClassName={style.active} href="/article/1">Article 1</Link>
		</nav>
	</header>
);

export default Header;
