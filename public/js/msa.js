var msa = angular.module('msa', ['ngRoute', 'summernote']);

msa.config(function($routeProvider, $locationProvider, $compileProvider) {
	$routeProvider
	.when('/', {
		templateUrl: 'templates/home.html',
		controller: 'HomeController'
	})
	.when('/home', {
		templateUrl: 'templates/home.html',
		controller: 'HomeController'
	})
	.when('/article', {
		templateUrl: 'templates/articles.html',
		controller: 'ArticleListController'
	})
	.when('/article/:id', {
		templateUrl: 'templates/article.html',
		controller: 'ArticleController'
	})
	.when('/legacy', {
		templateUrl: 'templates/legacy/index.html',
		controller: 'LegacyIndexController'
	})
	.when('/legacy/crafty', {
		templateUrl: 'templates/legacy/crafty/index.html'
	})
	.when('/legacy/crafty/smithy', {
		templateUrl: 'templates/legacy/crafty/smithy.html'
	})
	.when('/legacy/crafty/magicforge', {
		templateUrl: 'templates/legacy/crafty/magicforgeinstitude.html'
	})
	.when('/legacy/library', {
		templateUrl: 'templates/legacy/library/index.html'
	})
	.when('/legacy/library/bio', {
		templateUrl: 'templates/legacy/library/herosbio.html'
	})
	.otherwise({
		redirectTo : '/'
	});
	$compileProvider.directive('ngIcheck', function($compile) {
		return {
			restrict: 'A',
			required: '?ngModel',
			link: function($scope, $element, $attrs, $ngModel) {
				if (!$ngModel)
					return;
				$($element).iCheck({
					checkboxClass: 'icheckbox_minimal',
					radioClass: 'iradio_minimal',
					increaseArea: '20%'
				}).on('ifClicked', function(event) {
					if ($attrs.type == 'checkbox') {
						$scope.$apply(function() {
							$ngModel.$setViewValue(!($ngModel.$modelValue == undefined ? false : $ngModel.$modelValue));
						});
					} else {
						$scope.$apply(function() {
							$ngModel.$setViewValue($attrs.value);
						});
					}
				});
			},
		};
	});
	$locationProvider.html5Mode(true);
});

msa.controller('LegacyIndexController', function($scope, $routeParams, ArticleService) {
});

msa.controller('ArticleController', function($scope, $routeParams, ArticleService) {
	ArticleService.fetch_article($routeParams.id);
});

msa.controller('ArticleListController', function($scope, $http, ArticleService) {
	$scope.fetch_prev_page = function() {
		ArticleService.fetch_prev_page();
	};
	$scope.fetch_next_page = function() {
		ArticleService.fetch_next_page();
	};
	$scope.fetch_page = function(pagi) {
		ArticleService.fetch_articles(pagi);
	};
	$scope.refresh_articles = function() {
		ArticleService.fetch_articles($scope.articles.current_page);
	};
	$scope.open_poster = function() {
		if ($scope.show_poster == true)
			return;
		$scope.show_poster = true;
	};
	$scope.close_poster = function() {
		if ($scope.show_poster == false)
			return;
		$scope.show_poster = false;
	};
	$scope.publish = function() {
		ArticleService.publish_article($scope.publish_article_data);
	};
	$scope.get_article_category = function() {
		ArticleService.get_category().success(function () {
			$scope.publish_article_data.category = $scope.article_categories[0];
		});
	};
	$scope.view_article = function(article_id) {
		ArticleService.view_article(article_id);
	};
		
	// Execute on init.
	ArticleService.init_headline();
	ArticleService.fetch_articles(1);
	ArticleService.get_category();
	$scope.show_poster = false;
	$scope.show_page_header = true;
	$scope.show_post_container = true;
});

msa.controller('HomeController', function($scope) {
	$scope.category_name = "CATEGORY ON HOME PAGE";
});

msa.factory('ArticleService', function($http, $rootScope, $location) {
	var fill_articles = function(response) {
		$rootScope.articles = response;
	};
	var fill_error_codes = function(response) {
		$rootScope.error_code = response;
	};
	var fetch_article = function(page) {
		var result = $http.get('/api/articles/1/' + page + '/15');
		result.success(fill_articles);
		return result;
	};
	var assign_category_data = function(response) {
		$rootScope.article_categories = response;
	};
	var assign_article_data = function(response) {
		$rootScope.show_article = response;
	};
	return {
		init_headline: function() {
			$rootScope.category_name = "CATEGORY ON ARTICLE PAGE";
			$rootScope.category_headline_title = "This is the title of our headline.";
			$rootScope.category_headline_content = "This is the content of our headline.";
		},
		fetch_articles: function(page) {
			return fetch_article(page);
		},
		fetch_next_page: function() {
			if ($rootScope.articles.current_page >= $rootScope.articles.last_page)
				return;
			fetch_article($rootScope.articles.current_page + 1);
		},
		fetch_prev_page: function() {
			if ($rootScope.articles.current_page <= 1)
				return;
			fetch_article($rootScope.articles.current_page - 1);
		},
		publish_article: function(publish_article_data) {
			if (publish_article_data.category == null)
				return; // todo: add warning message.
			var result = $http.post('/api/publish_article', publish_article_data).success(check_publish_response);
			return result;
		},
		get_category: function() {
			var result = $http.get('/api/article_categories').success(assign_category_data);
			return result;
		},
		view_article: function(article_id) {
			$location.path('/article/' + article_id);
		},
		fetch_article: function(article_id) {
			var result = $http.get('/api/article/' + article_id).success(assign_article_data);
			return result;
		},
		check_publish_response: function(response) {
			if (response.success == true) {
				// show a message and redirect
			} else {
				// show a message and stay on the editor
			}
		}
	};
});