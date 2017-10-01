<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- jQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Vue.js CDN-->
	<script src="https://unpkg.com/vue/dist/vue.js"></script>

	<!-- code -->
  <title>Document</title>
</head>
<body>
<div class="container">
	<div id="application">
		<input type="text" v-model="searchInput">
		<ul>
			<li v-for="subject in queriedScienceSubjects">{{ subject }}</li>
		</ul>
	</div>
</div>

<script>
	new Vue({
		el: '#application',
		data: {
		  searchInput: '',
			scienceSubjects: ['Physics', 'Chemistry', 'Biology', 'Math', 'Calculus', 'Programming', 'Computer Science', 'Artificial Intelligence', 'Renewable Energy'],
		},
		computed: {
		  queriedScienceSubjects: function () {
				var self = this;
			  return this.scienceSubjects.filter(
			    function (value) {
						lowerCaseValue = value.toLowerCase();
						lowerCaseSearchInput = self.searchInput.toLowerCase();
						return (lowerCaseValue.indexOf(lowerCaseSearchInput) !== -1);
			    }
			  );
		  }
		}
	});
</script>
</body>
</html>