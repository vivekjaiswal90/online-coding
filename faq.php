<?php  
session_start();
if ($_SESSION['login']==1) 
			{echo "Welcome ";
			echo $_SESSION['username']; }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
if(isset($_SESSION['login']))
 if ($_SESSION['login']==1) 
			{ ?> <h6 align="right"> <a href="index.php?t=1" <u>Log Out </u></a></h6> <?php } ?>  

<h2 id="General_FAQs">General FAQs</h2>
<h3 id="How_does_Our Server_test_whether_my_solution_is_correct_or_not">How does Our Server test whether my solution is correct or not?</h3>

<p>Your code is tested by a computer automatically, not by a human being, and you have to write your code accordingly.</p>
<p>For each problem, Our Server will have one or more input files, each according to the specifications mentioned in the problem statement, and corresponding correct output files. Our Server will run your program on each of the input files by redirecting the standard input stream to an input file, and the standard output stream to another file. The output generated by your program must match the correct output *exactly* in order to be judged correct.</p>
<p>Some consequences of this:</p>
<ul>
<li>If your program starts by printing 'Enter the number' and the problem does not tell you to do so, then since this is not part of the correct output, you will be never be judged correct regardless of what the rest of your program does.</li>
<li>As all that matters is that the output files match, it makes no difference at all at what point in your program's execution that this output is written. So there is no need to read all of the input before starting output; it is much more common to just print out each result as you are reading through the input.</li>
<li>If you use any method other than using the standard input and output streams - for example, using command line arguments, reading from a file, opening up some sort of dialog box, or otherwise - you will never be judged correct.</li>
</ul>
<p> </p>
<hr/>

<p> </p>
<h3 id="How_should_I_test_my_program">How should I test my program?</h3>
<p>The best way of testing your program is doing so in exactly the same way that Our Server does. Create an input file (for example, in.txt). Then run your program from the command line, using &lt; and &gt; to redirect the streams. For example:</p>
<p><code>java test &lt; in.txt &gt; out.txt</code></p>
<p>or</p>

<p><code>test.exe &lt; in.txt &gt; out.txt</code></p>
<p>Your output will then be in the out.txt file, so you can check if it is correct.</p>
<p>Often people forget to print a new line between test cases, but this is easily avoided if you use this method of testing.</p>
<p> </p>
<hr/>
<p> </p>
<h3 id="What_am_I_allowed_to_post_as_a_comment_for_a_problem">What am I allowed to post as a comment for a problem?</h3>

<p><b>If the problem is part of a contest that is still in progress:</b></p>
<p> </p>
<ul>
<li>Do NOT post code.</li>
<li>Do NOT post a comment asking why your solution is wrong.</li>
<li>Do NOT post a comment asking if you can be given the test case your program fails on.</li>
<li>Do NOT post a comment asking how your solution can be improved.</li>
<li>Do NOT post a comment giving any hints or discussing approaches to the problem, or what type or speed of algorithm is required.</li>
</ul>
<p><b>All such comments will be ignored or deleted</b>. All people deserve a fair chance to participate, so nobody will be given extra hints. You are expected to solve the problem completely by yourself.</p>

<p>The ONLY time you should be posting a comment is if you do not understand the problem statement. Before asking for a clarification, read the problem statement several times - often very silly questions are asked which are very clearly mentioned in the problem. Make sure you read earlier comments first in case your question has already been asked or answered.</p>
<p> </p>
<p><b>For problems in the practice section:</b></p>
<p> </p>
<ul>
<li>Do NOT post code. (See below if you are asking for help).</li>
<li>Do NOT post a comment asking if you can be given the test cases the judge uses. These are always kept secret.</li>
<li>Do NOT post anything that gives away the solution. Most people will want to solve the problem by themselves, and will be very annoyed if they accidentally read a comment that tells them how to solve the problem.</li>
</ul>
<p>Make sure you have read this entire FAQ before asking for help. The majority of people asking for help have made one of the very basic errors mentioned later in this FAQ.</p>

<p>If you have read this FAQ and still do not know why your code is not working, it is permissible to ask for help with the problem. Don't ask for a full solution or exactly what algorithm you should be using - that won't help you become a better programmer. You may well be given hints as to what your program is doing wrong, however.</p>
<p>As mentioned above, do not post your code as part of the comment - just paste in the link to your solution (which looks something like <a title="http://www.Our Server.com/viewsolution/xxxxxx" href="http://www.Our Server.com/viewsolution/xxxxxx">http://www.Our Server.com/viewsolution/xxxxxx</a> ). The Our Server admin, or anyone else who has solved the problem, will be able to see your submission.</p>
<p> </p>
<hr/>
<p> </p>
<h3 id="How_do_I_post_a_link_to_my_code">How do I post a link to my code?</h3>
<ol>
<li>Visit the problem page, say: <a href="/problems/TEST/">http://www.Our Server.com/problems/TEST/</a></li>

<li>To the right of the headline "Life, the Universe, and Everything" you will see 3 buttons: "ALL SUBMISSIONS", "MY SUBMISSIONS", and "SUBMIT". Click "MY SUBMISSIONS".</li>
<li>You will see a list of your submitted programs. Pick the one you want, and on the far right of the row, click "View Solution".</li>
<li>Copy and paste the link from your browser's navigation bar into the Comment page: <a href="/viewsolution/110651">http://www.Our Server.com/viewsolution/110651</a></li>
</ol>
<p> </p>
<hr/>
<p> </p>
<h3 id="How_does_the_time_limit_work">How does the time limit work?</h3>
<p>Your program must read, process, and output the result for an input file within the specified time limit. The input file will be of the format mentioned in the problem.</p>

<p>This means, if the input contains multiple test cases, your code must complete ALL of these within that time limit. If the time limit is 2 seconds, and there may be 1000 test cases, your program shouldn't be taking 1 second per test case - it needs to run all 1000 in under 2 seconds.</p>
<p>Some programming languages are slower than others, and are thus given more time. Currently, Java and Python are allowed twice the time limit, while Ruby, PHP and Lisp are allowed to run for up to three times the time limit.</p>
<p><b>The <a href="http://blog.Our Server.com/2009/04/01/announcing-time-limits-based-on-programming-language/">hyperlinked blog post</a> explains how the time limit will work for various languages.</b></p>
<p><b><br/></b></p>
<hr/>
<p> </p>
<h3 id="What_does_the_execution_time_displayed_for_my_submission_mean">What does the execution time displayed for my submission mean?</h3>
<p>Our Server might test your code multiple times with different input files. If your code gives the correct answer within the time limit for each input file, the execution time displayed is the total of the time spent for each test case.</p>

<p>If your code does not pass an input file correctly, the time limit will be the total time of all input files, up to and including the one on which you fail, but not any further ones.</p>
<p>An example: suppose there are 5 input files, each with a time limit of 2 seconds. Your program runs for 1 second on each input file and produces the correct answer. The total time displayed will be 5 seconds - which is fine, because the time limit only applies to each input file individually.</p>
<p>On the other hand, suppose you get the first 2 input files correct in 1 second, the third one incorrect in 1.5 seconds. Your reported time will be 3.5 seconds.</p>
<p>People are often confused by a wrong answer in a very quick time changing to time limit exceeded. This is due to the first input file being small; a wrong answer means the time for large input files is not included.</p>
<p> </p>
<hr/>
<p> </p>
<h2 id="Why_is_my_code_not_correct">Why is my code not correct?</h2>
<h3 id="Why_do_I_get_a_compile_error">Why do I get a compile error?</h3>

<p>There are a few reasons why your code may compile on your computer but not on Our Server. In all cases, you can see the compile error by clicking on the Compile Error icon after submitting your code.</p>
<p><b>Java:</b></p>
<p>Your class containing the main method must be a public class called Main. It may not be called anything else.<br/>Do not use packages.</p>
<p><b>C/C++:</b></p>
<p>Make sure you are using a compiler that complies with the standards. Turbo C++ is not such a compiler, and often code which compiles in Turbo C++ will not compile on Our Server.</p>
<p>Make sure you are using standard headers. Do not use conio.h in C; this is not part of the C standard library. Do not use iostream.h; this is a deprecated header file and again is not a standard library. (You should just be using iostream instead).</p>
<p>The flags used for C++ are: g++ -pipe -O2 -lm -s -fomit-frame-pointer</p>
<p><b>Other languages: </b></p>

<p>As with C/C++, make sure you are using a standard compiler/interpreter. The exact ones that Our Server uses are listed next to the language when submitting the program.</p>
<p>Read the <a class="freelinking" href="/freelinking/sample%20solutions">sample solutions</a> page to see an example of code which compiles and correctly solves the TEST program as a starting point.</p>
<p> </p>
<hr/>
<p> </p>
<h3 id="Why_do_I_get_a_Time_Limit_Exceeded">Why do I get a Time Limit Exceeded?</h3>
<p>The most common reason that you would get a Time Limit Exceeded is because your program is too slow. If a problem tells you that N &lt;= 100000, and your program has nested loops each which go up to N, your program will never be fast enough. Read the bounds in the input carefully before writing your program, and try to figure out which inputs will cause your program to run the slowest.</p>

<p>The second most common cause of TLE is that your method of reading input and writing output is too slow. In Java, do not use a Scanner; use a BufferedReader instead. In C++, do not use cin/cout - use scanf and printf instead.</p>
<p>To see if your method of reading input is fast enough, try solving the <a href="/problems/INTEST/">Enormous Input Test</a> problem. If you get time limit exceeded, try another method of reading input.</p>
<p>In Python, you could try speeding up your solutions by adding the following two lines to the start of your file:</p>
<p><code>import psyco<br/> psyco.full()</code></p>
<p>Finally, you may have tested your code on all sorts of large inputs and are sure your code will run inside the time limit. However, Our Server's judge may be slower than your computer. It is common for a program to take 2-3 times as long on Our Server as it does on your computer. The time limits are all attainable, so you will just need to come up with a way of making your algorithm faster. (One possibility in C++ is to avoid using STL, which can be a little slow).</p>
<p> </p>

<hr/>
<p> </p>
<h3 id="Why_do_I_get_a_Runtime_exception">Why do I get a Runtime exception?</h3>
<p>There are four types of Runtime exception, and you can see which one you are getting by hovering your mouse over the icon. Each is covered below. You cannot know anything more specific; for example the exact Exception thrown in Java. Note that some errors could lead onto other errors, so even if you are getting one particular message, you should check each of these sections below.</p>
<p> </p>
<hr/>
<p> </p>
<h3 id="Why_do_I_get_a_SIGSEGV">Why do I get a SIGSEGV?</h3>
<p>This is an error caused by an invalid memory reference or segmentation fault. The most common causes are accessing an array element out of bounds, or using too much memory.</p>
<p>Some things for you to try:</p>

<ul>
<li>Make sure you aren't using variables that haven't been initialised. These may be set to 0 on your computer, but aren't guaranteed to be on the judge.</li>
<li>Check every single occurrence of accessing an array element and see if it could possibly be out of founds.</li>
<li>Make sure you aren't declaring too much memory. 64 MB is guaranteed, but having an array of size [10000][10000] will never work.</li>
<li>Make sure you aren't declaring too much stack memory. Any large arrays should be declared globally, outside of any functions - putting an array of 100000 ints inside a function probably won't work.</li>
</ul>
<p> </p>
<hr/>
<p> </p>
<h3 id="Why_do_I_get_a_SIGABRT">Why do I get a SIGABRT?</h3>

<p>SIGABRT errors are caused by your program aborting due to a fatal error. In C++, this is normally due to an assert statement in C++ not returning true, but some STL elements can generate this if they try to store too much memory.</p>
<p> </p>
<hr/>
<p> </p>
<h3 id="Why_do_I_get_a_SIGFPE">Why do I get a SIGFPE?</h3>
<p>This is the easiest runtime error to debug - it is a floating point error. It is virtually always caused by a division by 0, so check any divisions or modulo operations in your code carefully.</p>
<p> </p>
<hr/>
<p> </p>
<h3 id="Why_do_I_get_an_NZEC">Why do I get an NZEC?</h3>

<p>NZEC stands for Non Zero Exit Code. For C users, this will be generated if your main method does not have a return 0; statement. Other languages like Java/C++ could generate this error if they throw an exception.</p>
<p> </p>
<hr/>
<h3 id="Why_do_I_get_a_Runtime_Error_Other">Why do I get a Runtime Error (Other)?</h3>
<p>This type of error is sometimes generated if you use too much memory. Check for arrays that are too large, or other elements that could grow to a size too large to fit in memory.</p>
<p>It can also be sometimes be generated for similar reasons to the SIGSEGV error.</p>
<p> </p>
<hr/>
<p> </p>
<h3 id="Why_do_I_get_Wrong_Answer">Why do I get Wrong Answer?</h3>

<p>Wrong answer means simply that - your program is not printing out the correct answer. You will just have to debug your program very carefully! Make sure your program is conforming exactly to the output format required, and not printing out unnecessary information, as mentioned at the start of this FAQ. Read below for a couple of other common issues that may lead to a Wrong Answer.</p>
<p> </p>
<h3 id="Why_do_I_get_an_internal_error">Why do I get an internal error?</h3>
<p>If you get an internal error this is not due to anything you have done - it is an error on the Our Server server. You may need to just try again later; alternatively, sometimes it will display an internal error but you will still be able to see the result of your submission by clicking on the My Submissions link on the problem page.</p>
<p> </p>
<hr/>
<p> </p>
<h2 id="Other_common_mistakes">Other common mistakes</h2>
<p>In Java, do not create multiple BufferedReaders on the standard input stream. Create it once, and use it from there. Creating it multiple times will lead to a wrong answer due to the method Our Server uses to test your program.</p>

<p>Different operating systems have different ways of representing a newline; do not assume one particular way will be used. For example, on Unix a newline is simply a \n character. On Windows, a newline is represented by \r\n, and not testing for the \r character will lead to problems. Ideally, use input reading functions from your language which handle new line issues for you.</p>
<p> </p>
<hr/>
<p> </p>
<h2 id="Other_common_questions">Other common questions</h2>
<h3 id="If_a_number_of_test_cases_isn-t_provided_when_should_my_program_stop_reading_input">If a number of test cases isn't provided, when should my program stop reading input?</h3>
<p>Some problems do not have multiple test cases, and are instead judged by testing your code multiple times on different input files. If the problem statement does not say there are multiple cases, do not assume there are.</p>
<p>Other problems mention multiple test cases, but don't provide any limits on how many there could be. Your program should stop at the end of the input file. All programming languages have a way of testing this; for example, in Java, a BufferedReader's readLine() method will return null. In C++, scanf returns the number of items successfully matched; EOF if it reaches the end of the file.</p>
<p>Read your programming language's documentation to find out what it returns.</p>

<p>If you choose to test your program without the redirection method mentioned earlier, you can generate an EOF (end-of-file) character by pressing Ctrl-Z.</p>
<p> </p>
<hr/>
<p> </p>
<h3 id="What_should_I_do_with_invalid_input">What should I do with invalid input?</h3>
<p>There will not be invalid input. If a program says a number will be between 0 and 100, it will be between 0 and 100. There is no need to write if (number&gt;=0 &amp;&amp; number&lt;=100), or do anything in other cases.</p>
<p> </p>

<hr/>
<p> </p>
<h3 id="How_can_I_store_very_very_large_integers_accurately">How can I store very very large integers accurately?</h3>
<p>Some problems require the use of what is called arbitrary-precision arithmetic, for example, adding together two numbers of 100 digits each.</p>
<p>These numbers are too large to store in an 32 or 64 bit integer. They are also too big to store in a double - a double is not accurate enough to store every single digit.</p>
<p>Some languages such as Java or Python have big integer classes built in. In other languages such as C/C++, the best way of handling these is to store them as strings.  You can write methods to multiply, divide, add or subtract these just as you were taught in school using pen and paper.</p>
<p> </p>
<hr/>
<p> </p>
<h3 id="In_CC_how_should_I_readwrite_long_longs">In C/C++, how should I read/write long longs?</h3>

<p>Some compilers, such as Dev-C++, require you to use %I64d with scanf/printf. However, for your code to work on Our Server, use %lld instead.</p>
<p> </p>
<hr/>
<p> </p>
<h3 id="If_my_code_gets_TLE_does_that_mean_it_is_correct_but_takes_too_long">If my code gets TLE, does that mean it is correct but takes too long?</h3>
<p>No, TLE simply means you exceeded the time limit. Your program never finished running in time - so Our Server has no idea whether it was going to print out the right results or not!</p>
<p> </p>
<hr/>
<p> </p>
<h3 id="Why_can_I_view_other_people-s_solutions_Can_they_view_mine_What_is_stopping_people_copying_other-s_code">Why can I view other people's solutions? Can they view mine? What is stopping people copying other's code?</h3>

<p>In general, solutions to a problem are only viewable by people who have already solved them themselves, and are accessible for educational purposes.</p>
<p>There are a couple of exceptions. Some very basic problems like TEST have all solutions public to help people get started with Our Server. After a contest is complete, contest solutions are also made public so you can see how other people have solved the problem.</p>
<p> </p>
<hr/>
<p> </p>

<p> </p>
<hr/>
<p> </p>
<h3 id="How_can_I_measure_the_execution_time_of_my_program_locally">How can I measure the execution time of my program locally?</h3>
<p>In unix, if your output file is called out.txt, you can get the execution time with the command <b>time ./out.txt</b>. Otherwise, you could just use functions from your programming language which measure the time at the start and end, and print out the difference.</p>
<p> </p>
</body>
</html>