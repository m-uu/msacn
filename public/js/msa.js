var msa = angular.module('msa', ['ngRoute', 'summernote']);

msa.config(function($routeProvider, $locationProvider) {
	$routeProvider
	.when('/home', {
		templateUrl: 'templates/home.html',
		controller: 'HomeController'
	})
	.otherwise({
		redirectTo : '/'
	});
	$locationProvider.html5Mode(true);
});

msa.controller('HomeController', function($scope, ArticleService) {
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
		ArticleService.publish_article($scope.publish_article_data).success(function() {
			$scope.show_poster = false;
			$scope.publish_article_data = null;
		});
	};
	$scope.get_article_category = function() {
		ArticleService.get_category().success(function () {
			$scope.publish_article_data.category = $scope.article_categories[0];
		});
	};
		
	// Execute on init.
	ArticleService.init_headline();
	ArticleService.fetch_articles(1);
	ArticleService.get_category();
	$scope.show_poster = false;
});

msa.factory('ArticleService', function($http, $rootScope) {
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
	return {
		init_headline: function() {
			$rootScope.category_tree = "TESTER CATEGORY"
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
			var result = $http.post('/api/publish_article', publish_article_data).success(fetch_article(1));
			return result;
		},
		get_category: function() {
			var result = $http.get('/api/article_categories').success(assign_category_data);
			return result;
		}
	};
});