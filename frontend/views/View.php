<?php
/**
 * Created by PhpStorm.
 * User: Comp8
 * Date: 11/30/2017
 * Time: 11:09 PM
 */

class View
{
    public function header()
    {
        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <script>
                function changePage($action) {
                    alert($action);
                }

                function searchResult() {
                    document.write(window.location);
                }

                function searchFunction() {
                    var search = document.getElementById("tasks_table");
                    return search;

                }


                function orderTable(column, formId, orderby, sortby) {

                    document.getElementById('order').value = column;
                    if (orderby == 'yes') {
                        document.getElementById('sort').value = sortby == 'ASC' ? 'DESC' : 'ASC';
                    } else {
                        document.getElementById('sort').value = sortby;
                    }

                    document.getElementById(formId).submit();
                }

            </script>


            <style>
                td {
                    border: 1px solid black;
                }
            </style>
        </head>
        <body>
        <div class="main">
        <!-- Tabs-->
        <div id="page" class="nav">
            <ul class="tab-links">
                <li class="signup"><a href="signup" name='signup'> Sign Up </a></li>
                <li class="login"><a href="login" name='login'> Log In</a></li>
                <li class="/profile"><a href="profile" name='profile'> Profile</a></li>
                <li class="projects"><a href="projects" name='projects'> Projects </a></li>
                <li class="tasks"><a href="tasks" name='tasks'> Tasks </a></li>
                <li class="users"><a href="users" name='users'> Users </a></li>
                <li class="logout"><a href="logout" name='logout'> Log Out </a></li>
                <!-- <li class = "login active"><a href = "login.php">Log in </a></li> -->
            </ul>
        </div>
        <?php
    }

    public function footer()
    {
        ?>

        </div>
        </body>
        </html>

        <?php
    }
}