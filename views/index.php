<?php defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * Created by PhpStorm.
	 * User: mat
	 * Date: 10/31/16
	 * Time: 3:11 AM
	 */
?>

<main class="container" ng-controller="HomeTestController">

	<div class="card center-block home-test">
		<!--		<div class="card-header">-->
		<!--			-->
		<!--		</div>-->
		<div class="card-block p-a-3">
			<h4 class="card-title">Homepage Test</h4>
			<p class="card-text bg-danger p-a-1">
				An input form just to put AngularJS, fontawesome, bootstrap and the main.css
				file to test to test.
			</p>

			<form class="form">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
						<input class="form-control"
							   ng-model="developer.userName">
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-key"></i></span>
						<input class="form-control"
							   type="password"
							   ng-model="developer.passWord">
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-outline-primary">Sign in</button>
				</div>
			</form>

			<div class="text-xs-center pre-scrollable">
				Output: <code>
					{{developer}}
				</code>
			</div>
		</div>
		<div class="card-footer">
			<span class="card-text pull-xs-right"><i class="fa fa-github"></i> @matscode</span>
		</div>
	</div>

</main>
