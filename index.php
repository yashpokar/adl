<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>ADL</title>
		<link rel="stylesheet" href="/css/adl.css">
	</head>
	<body>
		<nav class="adl-navigation">
			<a href="javascript:void(0)" class="adl-navigation__switch-sidebar">
				<i class="fa fa-outdent"></i>
			</a>
			<a href="javascript:void(0)" class="adl-navigation__switch-menu">
				<i class="fa fa-bars"></i>
			</a>
			<a href="javascript:void(0)" class="adl-navigation__logo">ADL</a>
			<div class="adl-navigation__menu--collapsed">
				<ul class="adl-navigation__menu adl-navigation__menu--left">
					<li><a href="javascript:void(0)">Home</a></li>
					<li><a href="javascript:void(0)">Contact</a></li>
					<li class="dropdown">
						<a href="javascript:void(0)">Gallery</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0)">My Profile</a></li>
							<li><a href="javascript:void(0)">Link 2</a></li>
							<li><a href="javascript:void(0)">Link 3</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:void(0)">Another</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0)">Yash Pokar</a></li>
							<li><a href="javascript:void(0)">Settings</a></li>
							<li><a href="javascript:void(0)">Migration</a></li>
						</ul>
					</li>
					<li><a href="javascript:void(0)">About</a></li>
				</ul>
				<form action="javascript:void(0)" class="adl-navigation__form">
					<input type="text" class="adl-navigation__form__input" placeholder="Search">
					<button type="submit" class="adl-navigation__form__button">Submit</button>
				</form>
				<ul class="adl-navigation__menu adl-navigation__menu--right">
					<li><a href="javascript:void(0)" id="login">Login</a></li>
					<li><a href="javascript:void(0)">Register</a></li>
				</ul>
			</div>
		</nav>

		<div class="adl-sidebar">
			<ul class="adl-sidebar__menu">
				<li><a href="javascript:void(0)">Dashboard</a></li>
				<li><a href="javascript:void(0)">Home</a></li>
			</ul>
		</div>
		
		<div class="adl-container">
			<div class="adl-row">
				<div class="adl-col-12">
					<div class="adl-alert adl-alert--success">
						<span class="fa fa-check"></span>
						<button class="adl-alert__close">&times;</button>
						<strong>Good Job!</strong> Your account has been created.
					</div>
				</div>
				<div class="adl-col-4 adl-col-offset-4">
					<div class="adl-card adl-card--default">
						<div class="adl-card__title">
							Sign Up
						</div>
						<div class="adl-card__body">
							<form action="javascript:void(0)" class="adl-form" method="post">
								<div class="adl-form__input-group">
									<input type="text" class="adl-form__input-field" name="name" placeholder="Name">
								</div>
								<div class="adl-form__input-group">
									<input type="email" class="adl-form__input-field" name="email" placeholder="Email">
								</div>
								<div class="adl-form__input-group">
									<input type="date" class="adl-form__input-field" name="date" placeholder="Date">
								</div>

								<div class="adl-form__input-group">
									<select class="adl-form__select-box">
										<option value="">Country</option>
										<option>India</option>
										<option>Austrelia</option>
										<option>America</option>
									</select>
								</div>
								<div class="adl-form__input-group">
									<input type="password" class="adl-form__input-field" placeholder="Password">
								</div>
								<div class="adl-form__input-group">
									<label class="adl-form__radio-button">
										<input type="radio" name="gender" value="male">
										<span class="adl-form__radio-button__text">Male</span>
									</label>
									<label class="adl-form__radio-button">
										<input type="radio" name="gender" value="male">
										<span class="adl-form__radio-button__text">Female</span>
									</label>
								</div>
								<div class="adl-form__input-group">
									<label class="adl-form__toggle-button">
										<input type="checkbox" name="setting" value="On">
										<span class="adl-form__toggle-button__text">On</span>
									</label>
								</div>
								<div class="adl-form__input-group">
									<label class="adl-form__check-box">
										<input type="checkbox">
										<span class="adl-form__check-box__text">Remember</span>
									</label>
								</div>
								<div class="adl-form__input-group">
									<button type="submit" class="adl-button">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="adl-modal" stands-for="#login">
			<div class="adl-modal__content">
				<form action="javascript:void(0)" class="adl-form">
					<div class="adl-form__input-group">
						<input type="text" class="adl-form__input-field" placeholder="Name">
					</div>
					<div class="adl-form__input-group">
						<input type="email" class="adl-form__input-field" placeholder="Email">
					</div>
					<div class="adl-form__input-group">
						<select class="adl-form__select-box">
							<option value="">Country</option>
							<option>India</option>
							<option>Austrelia</option>
							<option>America</option>
						</select>
					</div>
					<div class="adl-form__input-group">
						<input type="password" class="adl-form__input-field" placeholder="Password">
					</div>
					<div class="adl-form__input-group">
						<label>
							<input type="checkbox" class="adl-form__check-box"> I Agree
						</label>
					</div>
					<div class="adl-form__input-group">
						<button type="submit" class="adl-button">Submit</button>
					</div>
				</form>
			</div>
			<button class="adl-modal__close">&times;</button>
		</div>

		<div class="adl-notify">
			<span class="fa fa-bell"></span>
			Your job is done!
			<button class="adl-notify__close">&times;</button>
		</div>

		<script src="/js/adl.js"></script>
	</body>
</html>