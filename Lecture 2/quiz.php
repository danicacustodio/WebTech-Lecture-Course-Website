<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>PHP Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<div id="page-wrap">
		<h1>Final Quiz for Web Technologies</h1>
		<form action="grade.php" method="post" id="quiz">
            <ol>
                <li>
					<h3>In a servlet life cycle, before a Servlet instance is created</h3>
						<div>
							<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
							<label for="question-1-answers-A">A) init  method is invoked</label>
						</div>
						<div>
							<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
							<label for="question-1-answers-B">B) service method is invoked</label>
						</div>
						<div>
							<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
							<label for="question-1-answers-C">C) Servlet class is loaded</label>
						</div>
						<div>
							<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
							<label for="question-1-answers-D">D) None of the above</label>
						</div>
					</li>
					<li>
						<h3>Which two of the following circumstances will cause a servlet intance's destroy() method tobe never called?</h3>
						<div>
							<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
							<label for="question-2-answers-A">A) As a result of a web application closedown request</label>
						</div>
						<div>
							<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
							<label for="question-2-answers-B">B) When init() has not succesfully run to completion</label>
						</div>
						<div>
							<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
							<label for="question-2-answers-C">C) If no thread has ever executed the service() method</label>
						</div>
						<div>
							<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
							<label for="question-2-answers-D">D) d.	During Servlet replacement</label>
						</div>
					</li>
					<li>
						<h3>Which specification defines an application programming interface for communication between the Web server and the application program?</h3>
						<div>
							<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
							<label for="question-3-answers-A">A) Java Server </label>
						</div>
						<div>
							<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
							<label for="question-3-answers-B">B) Java Randomize</label>
						</div>
						<div>
							<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
							<label for="question-3-answers-C">C) Java Servlet</label>
						</div>
						<div>
							<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
							<label for="question-3-answers-D">D) Java Program</label>
						</div>
					</li>
					<li>
						<h3>Which of the following method can be used to extract values of the parameter’s type and number</h3>
						<div>
							<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
							<label for="question-4-answers-A">A) request.getParameter() </label>
						</div>
						<div>
							<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
							<label for="question-4-answers-B">B) request.getParameterValues</label>
						</div>
						<div>
							<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
							<label for="question-4-answers-C">C) request.getParameterNames</label>
						</div>
						<div>
							<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
							<label for="question-4-answers-D">D) response.getParameter()</label>
						</div>
					</li>
					<li>
						<h3>Which of the following code is used to get names of the headers in servlet?</h3>
						<div>
							<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
							<label for="question-5-answers-A">A) response.getHeaderNames() </label>
						</div>
						<div>
							<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
							<label for="question-5-answers-B">B) request.getHeaderNames()</label>
						</div>
						<div>
							<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
							<label for="question-5-answers-C">C) Header.getHeaderNames()</label>
						</div>
						<div>
							<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
							<label for="question-5-answers-D">D) None of the above</label>
						</div>
					</li>
					<li>
						<h3>Which of the following code retrieves the query string that is contained in the request URL after the path?</h3>
						<div>
							<input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
							<label for="question-6-answers-A">A) Header.getQueryString() </label>
						</div>
						<div>
							<input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
							<label for="question-6-answers-B">B) response.getQueryString()</label>
						</div>
						<div>
							<input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
							<label for="question-6-answers-C">C) request.getQueryString()</label>
						</div>
						<div>
							<input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
							<label for="question-6-answers-D">D) None of the above</label>
						</div>
					</li>
					<li>
						<h3>Which method is called first each time a Servlet is invoked ?</h3>
						<div>
							<input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
							<label for="question-7-answers-A">A) start() </label>
						</div>
						<div>
							<input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
							<label for="question-7-answers-B">B) run()</label>
						</div>
						<div>
							<input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
							<label for="question-7-answers-C">C) service()</label>
						</div>
						<div>
							<input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
							<label for="question-7-answers-D">D) init()</label>
						</div>
					</li>
					<li>
						<h3>What method does web container calls before removing the servlet instance from the service to give the servlet an opportunity to clean up any resource?</h3>
						<div>
							<input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
							<label for="question-8-answers-A">A) init() </label>
						</div>
						<div>
							<input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
							<label for="question-8-answers-B">B) run()</label>
						</div>
						<div>
							<input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
							<label for="question-8-answers-C">C) destroy()</label>
						</div>
						<div>
							<input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
							<label for="question-8-answers-D">D) service</label>
						</div>
					</li>
					<li>
						<h3>What exception is thrown when Servlet initialization fails ?</h3>
						<div>
							<input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
							<label for="question-9-answers-A">A) IOException </label>
						</div>
						<div>
							<input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
							<label for="question-9-answers-B">B) ServletException</label>
						</div>
						<div>
							<input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
							<label for="question-9-answers-C">C) RemoteException</label>
						</div>
						<div>
							<input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
							<label for="question-9-answers-D">D) None of the above</label>
						</div>
					</li>
					<li>
						<h3>Name the class that includes the getSession method that is used to get the HttpSession object.</h3>
						<div>
							<input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
							<label for="question-10-answers-A">A) HttpServletRequest </label>
						</div>
						<div>
							<input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
							<label for="question-10-answers-B">B) HttpServletResponse</label>
						</div>
						<div>
							<input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
							<label for="question-10-answers-C">C) SessionContext</label>
						</div>
						<div>
							<input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
							<label for="question-10-answers-D">D) SessionConfig</label>
						</div>
					</li>
					<li>
						<h3>Which of the following HttpServlet class method provides a way to determine when aresource has been last modified?</h3>
						<div>
							<input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
							<label for="question-11-answers-A">A) Post </label>
						</div>
						<div>
							<input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
							<label for="question-11-answers-B">B) Head</label>
						</div>
						<div>
							<input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
							<label for="question-11-answers-C">C) Get</label>
						</div>
						<div>
							<input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" />
							<label for="question-11-answers-D">D) Date</label>
						</div>
					</li>
					<li>
						<h3>12.	Which of the following best represents the sequence of events in a servlet lifecycle?</h3>
						<div>
							<input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
							<label for="question-12-answers-A">A) class instantiation,class loading,service method,init method,delete method </label>
						</div>
						<div>
							<input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
							<label for="question-12-answers-B">B) class loading,class instantiation,service method,init method,delete method</label>
						</div>
						<div>
							<input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
							<label for="question-12-answers-C">C) class loading,class instantiation,service method,init method,destroy method</label>
						</div>
						<div>
							<input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
							<label for="question-12-answers-D">D) class loading,class instantiation,init method,service method,destroy method</label>
						</div>
					</li>
				</ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>