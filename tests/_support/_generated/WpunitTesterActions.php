<?php  //[STAMP] 1ddb2874b74f4b605233e51db84f32e3
namespace _generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

trait WpunitTesterActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Accessor method to get the object storing the factories for things.
     * This methods gives access to the same factories provided by the
     * [Core test suite](https://make.wordpress.org/core/handbook/testing/automated-testing/writing-phpunit-tests/).
     *
     * @example
     * ```php
     * $postId = $I->factory()->post->create();
     * $userId = $I->factory()->user->create(['role' => 'administrator']);
     * ```
     *
     * @return FactoryStore A factory store, proxy to get hold of the Core suite object factories.
     *
     * @link https://make.wordpress.org/core/handbook/testing/automated-testing/writing-phpunit-tests/
     * @see \Codeception\Module\WPLoader::factory()
     */
    public function factory() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('factory', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that at least one query was made during the test.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * wp_cache_delete('page-posts', 'acme');
     * $pagePosts = $plugin->getPagePosts();
     * $I->assertQueries('Queries should be made to set the cache.')
     * ```
     *
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueries()
     */
    public function assertQueries($message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueries', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that no queries were made.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * $posts = $this->factory()->post->create_many(3);
     * wp_cache_set('page-posts', $posts, 'acme');
     * $pagePosts = $plugin->getPagePosts();
     * $I->assertNotQueries('Queries should not be made if the cache is set.')
     * ```
     *
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertNotQueries()
     */
    public function assertNotQueries($message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotQueries', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that n queries have been made.
     *
     * @example
     * ```php
     * $posts = $this->factory()->post->create_many(3);
     * $cachedUsers = $this->factory()->user->create_many(2);
     * $nonCachedUsers = $this->factory()->user->create_many(2);
     * foreach($cachedUsers as $userId){
     *      wp_cache_set('page-posts-for-user-' . $userId, $posts, 'acme');
     * }
     * // Run the same query as different users
     * foreach(array_merge($cachedUsers, $nonCachedUsers) as $userId){
     *      $pagePosts = $plugin->getPagePostsForUser($userId);
     * }
     * $I->assertCountQueries(2, 'A query should be made for each user missing cached posts.')
     * ```
     *
     * @param int $n The expected number of queries.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertCountQueries()
     */
    public function assertCountQueries($n, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertCountQueries', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that at least a query starting with the specified statement was made.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * wp_cache_flush();
     * cached_get_posts($args);
     * $I->assertQueriesByStatement('SELECT');
     * ```
     *
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesByStatement()
     */
    public function assertQueriesByStatement($statement, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesByStatement', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that at least one query has been made by the specified class method.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * $options = new Acme\Options();
     * $options->update('showAds', false);
     * $I->assertQueriesByMethod('Acme\Options', 'update');
     * ```
     *
     * @param string $class The fully qualified name of the class to check.
     * @param string $method The name of the method to check.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesByMethod()
     */
    public function assertQueriesByMethod($class, $method, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesByMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that no queries have been made by the specified class method.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * $bookRepository = new Acme\BookRepository();
     * $repository->where('ID', 23)->set('title', 'Peter Pan', $deferred = true);
     * $this->assertNotQueriesByStatement('INSERT', 'Deferred write should happen on __destruct');
     * ```
     *
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertNotQueriesByStatement()
     */
    public function assertNotQueriesByStatement($statement, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotQueriesByStatement', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that n queries starting with the specified statement were made.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * $bookRepository = new Acme\BookRepository();
     * $repository->where('ID', 23)->set('title', 'Peter Pan', $deferred = true);
     * $repository->where('ID', 89)->set('title', 'Moby-dick', $deferred = true);
     * $repository->where('ID', 2389)->set('title', 'The call of the wild', $deferred = false);
     * $this->assertQueriesCountByStatement(1, 'INSERT', 'Deferred write should happen on __destruct');
     * ```
     *
     * @param int $n The expected number of queries.
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesCountByStatement()
     */
    public function assertQueriesCountByStatement($n, $statement, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesCountByStatement', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that no queries have been made by the specified class method.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * $options = new Acme\Options();
     * $options->update('adsSource', 'not-a-real-url.org');
     * $I->assertNotQueriesByMethod('Acme\Options', 'update');
     * ```
     *
     * @param string $class The fully qualified name of the class to check.
     * @param string $method The name of the method to check.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertNotQueriesByMethod()
     */
    public function assertNotQueriesByMethod($class, $method, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotQueriesByMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that n queries have been made by the specified class method.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * $bookRepository = new Acme\BookRepository();
     * $repository->where('ID', 23)->commit('title', 'Peter Pan');
     * $repository->where('ID', 89)->commit('title', 'Moby-dick');
     * $repository->where('ID', 2389)->commit('title', 'The call of the wild');
     * $this->assertQueriesCountByMethod(3, 'Acme\BookRepository', 'commit');
     * ```
     * @param int $n The expected number of queries.
     * @param string $class The fully qualified name of the class to check.
     * @param string $method The name of the method to check.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesCountByMethod()
     */
    public function assertQueriesCountByMethod($n, $class, $method, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesCountByMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that queries were made by the specified function.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * acme_clean_queue();
     * $this->assertQueriesByFunction('acme_clean_queue');
     * ```
     *
     * @param string $function The fully qualified name of the function to check.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesByFunction()
     */
    public function assertQueriesByFunction($function, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesByFunction', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that no queries were made by the specified function.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * $this->assertEmpty(Acme\get_orphaned_posts());
     * Acme\delete_orphaned_posts();
     * $this->assertNotQueriesByFunction('Acme\delete_orphaned_posts');
     * ```
     *
     * @param string $function The fully qualified name of the function to check.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertNotQueriesByFunction()
     */
    public function assertNotQueriesByFunction($function, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotQueriesByFunction', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that n queries were made by the specified function.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * $this->assertCount(3, Acme\get_orphaned_posts());
     * Acme\delete_orphaned_posts();
     * $this->assertQueriesCountByFunction(3, 'Acme\delete_orphaned_posts');
     * ```
     *
     * @param int $n The expected number of queries.
     * @param string $function The function to check the queries for.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesCountByFunction()
     */
    public function assertQueriesCountByFunction($n, $function, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesCountByFunction', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that queries were made by the specified class method starting with the specified SQL statement.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * Acme\BookRepository::new(['title' => 'Alice in Wonderland'])->commit();
     * $this->assertQueriesByStatementAndMethod('UPDATE', Acme\BookRepository::class, 'commit');
     * ```
     *
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $class The fully qualified name of the class to check.
     * @param string $method The name of the method to check.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesByStatementAndMethod()
     */
    public function assertQueriesByStatementAndMethod($statement, $class, $method, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesByStatementAndMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that no queries were made by the specified class method starting with the specified SQL statement.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * Acme\BookRepository::new(['title' => 'Alice in Wonderland'])->commit();
     * $this->assertQueriesByStatementAndMethod('INSERT', Acme\BookRepository::class, 'commit');
     * ```
     *
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $class The fully qualified name of the class to check.
     * @param string $method The name of the method to check.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertNotQueriesByStatementAndMethod()
     */
    public function assertNotQueriesByStatementAndMethod($statement, $class, $method, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotQueriesByStatementAndMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that n queries were made by the specified class method starting with the specified SQL statement.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * Acme\BookRepository::new(['title' => 'Alice in Wonderland'])->commit();
     * Acme\BookRepository::new(['title' => 'Moby-Dick'])->commit();
     * Acme\BookRepository::new(['title' => 'The Call of the Wild'])->commit();
     * $this->assertQueriesCountByStatementAndMethod(3, 'INSERT', Acme\BookRepository::class, 'commit');
     * ```
     *
     * @param int $n The expected number of queries.
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $class The fully qualified name of the class to check.
     * @param string $method The name of the method to check.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesCountByStatementAndMethod()
     */
    public function assertQueriesCountByStatementAndMethod($n, $statement, $class, $method, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesCountByStatementAndMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that queries were made by the specified function starting with the specified SQL statement.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * wp_insert_post(['post_type' => 'book', 'post_title' => 'Alice in Wonderland']);
     * $this->assertQueriesByStatementAndFunction('INSERT', 'wp_insert_post');
     * ```
     *
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $function The fully qualified function name.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesByStatementAndFunction()
     */
    public function assertQueriesByStatementAndFunction($statement, $function, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesByStatementAndFunction', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that no queries were made by the specified function starting with the specified SQL statement.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * wp_insert_post(['ID' => $bookId, 'post_title' => 'The Call of the Wild']);
     * $this->assertNotQueriesByStatementAndFunction('INSERT', 'wp_insert_post');
     * $this->assertQueriesByStatementAndFunction('UPDATE', 'wp_insert_post');
     * ```
     *
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $function The name of the function to check the assertions for.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertNotQueriesByStatementAndFunction()
     */
    public function assertNotQueriesByStatementAndFunction($statement, $function, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotQueriesByStatementAndFunction', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that n queries were made by the specified function starting with the specified SQL statement.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * wp_insert_post(['post_type' => 'book', 'post_title' => 'The Call of the Wild']);
     * wp_insert_post(['post_type' => 'book', 'post_title' => 'Alice in Wonderland']);
     * wp_insert_post(['post_type' => 'book', 'post_title' => 'The Chocolate Factory']);
     * $this->assertQueriesCountByStatementAndFunction(3, 'INSERT', 'wp_insert_post');
     * ```
     *
     * @param int $n The expected number of queries.
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $function The fully-qualified function name.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesCountByStatementAndFunction()
     */
    public function assertQueriesCountByStatementAndFunction($n, $statement, $function, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesCountByStatementAndFunction', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that at least one query was made as a consequence of the specified action.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * add_action( 'edit_post', function($postId){
     *         $count = get_option('acme_title_updates_count');
     *         update_option('acme_title_updates_count', ++$count);
     * } );
     * wp_update_post(['ID' => $bookId, 'post_title' => 'New Title']);
     * $this->assertQueriesByAction('edit_post');
     * ```
     *
     * @param string $action The action name, e.g. 'init'.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesByAction()
     */
    public function assertQueriesByAction($action, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesByAction', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that no queries were made as a consequence of the specified action.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * add_action( 'edit_post', function($postId){
     *         $count = get_option('acme_title_updates_count');
     *         update_option('acme_title_updates_count', ++$count);
     * } );
     * wp_delete_post($bookId);
     * $this->assertNotQueriesByAction('edit_post');
     * ```
     *
     * @param string $action The action name, e.g. 'init'.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertNotQueriesByAction()
     */
    public function assertNotQueriesByAction($action, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotQueriesByAction', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that n queries were made as a consequence of the specified action.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * add_action( 'edit_post', function($postId){
     *         $count = get_option('acme_title_updates_count');
     *         update_option('acme_title_updates_count', ++$count);
     * } );
     * wp_update_post(['ID' => $bookOneId, 'post_title' => 'One']);
     * wp_update_post(['ID' => $bookTwoId, 'post_title' => 'Two']);
     * wp_update_post(['ID' => $bookThreeId, 'post_title' => 'Three']);
     * $this->assertQueriesCountByAction(3, 'edit_post');
     * ```
     *
     * @param int $n The expected number of queries.
     * @param string $action The action name, e.g. 'init'.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesCountByAction()
     */
    public function assertQueriesCountByAction($n, $action, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesCountByAction', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that at least one query was made as a consequence of the specified action containing the SQL query.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * add_action( 'edit_post', function($postId){
     *         $count = get_option('acme_title_updates_count');
     *         update_option('acme_title_updates_count', ++$count);
     * } );
     * wp_update_post(['ID' => $bookId, 'post_title' => 'New']);
     * $this->assertQueriesByStatementAndAction('UPDATE', 'edit_post');
     * ```
     *
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $action The action name, e.g. 'init'.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesByStatementAndAction()
     */
    public function assertQueriesByStatementAndAction($statement, $action, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesByStatementAndAction', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that no queries were made as a consequence of the specified action containing the SQL query.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * add_action( 'edit_post', function($postId){
     *         $count = get_option('acme_title_updates_count');
     *         update_option('acme_title_updates_count', ++$count);
     * } );
     * wp_delete_post($bookId);
     * $this->assertNotQueriesByStatementAndAction('DELETE', 'delete_post');
     * ```
     *
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $action The action name, e.g. 'init'.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertNotQueriesByStatementAndAction()
     */
    public function assertNotQueriesByStatementAndAction($statement, $action, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotQueriesByStatementAndAction', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that n queries were made as a consequence of the specified action containing the specified SQL statement.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * add_action( 'edit_post', function($postId){
     *         $count = get_option('acme_title_updates_count');
     *         update_option('acme_title_updates_count', ++$count);
     * } );
     * wp_delete_post($bookOneId);
     * wp_delete_post($bookTwoId);
     * wp_update_post(['ID' => $bookThreeId, 'post_title' => 'New']);
     * $this->assertQueriesCountByStatementAndAction(2, 'DELETE', 'delete_post');
     * $this->assertQueriesCountByStatementAndAction(1, 'INSERT', 'edit_post');
     * ```
     *
     * @param int $n The expected number of queries.
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $action The action name, e.g. 'init'.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesCountByStatementAndAction()
     */
    public function assertQueriesCountByStatementAndAction($n, $statement, $action, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesCountByStatementAndAction', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that at least one query was made as a consequence of the specified filter.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * add_filter('the_title', function($title, $postId){
     *      $post = get_post($postId);
     *      if($post->post_type !== 'book'){
     *          return $title;
     *      }
     *      $new = get_option('acme_new_prefix');
     *      return "{$new} - " . $title;
     * });
     * $title = apply_filters('the_title', get_post($bookId)->post_title, $bookId);
     * $this->assertQueriesByFilter('the_title');
     * ```
     *
     * @param string $filter The filter name, e.g. 'posts_where'.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesByFilter()
     */
    public function assertQueriesByFilter($filter, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesByFilter', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that no queries were made as a consequence of the specified filter.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * add_filter('the_title', function($title, $postId){
     *      $post = get_post($postId);
     *      if($post->post_type !== 'book'){
     *          return $title;
     *      }
     *      $new = get_option('acme_new_prefix');
     *      return "{$new} - " . $title;
     * });
     * $title = apply_filters('the_title', get_post($notABookId)->post_title, $notABookId);
     * $this->assertNotQueriesByFilter('the_title');
     * ```
     *
     * @param string $filter The filter name, e.g. 'posts_where'.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertNotQueriesByFilter()
     */
    public function assertNotQueriesByFilter($filter, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotQueriesByFilter', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that n queries were made as a consequence of the specified filter.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * add_filter('the_title', function($title, $postId){
     *      $post = get_post($postId);
     *      if($post->post_type !== 'book'){
     *          return $title;
     *      }
     *      $new = get_option('acme_new_prefix');
     *      return "{$new} - " . $title;
     * });
     * $title = apply_filters('the_title', get_post($bookOneId)->post_title, $bookOneId);
     * $title = apply_filters('the_title', get_post($notABookId)->post_title, $notABookId);
     * $title = apply_filters('the_title', get_post($bookTwoId)->post_title, $bookTwoId);
     * $this->assertQueriesCountByFilter(2, 'the_title');
     * ```
     *
     * @param int $n The expected number of queries.
     * @param string $filter The filter name, e.g. 'posts_where'.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesCountByFilter()
     */
    public function assertQueriesCountByFilter($n, $filter, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesCountByFilter', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that at least one query was made as a consequence of the specified filter containing the SQL query.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * add_filter('the_title', function($title, $postId){
     *      $post = get_post($postId);
     *      if($post->post_type !== 'book'){
     *          return $title;
     *      }
     *      $new = get_option('acme_new_prefix');
     *      return "{$new} - " . $title;
     * });
     * $title = apply_filters('the_title', get_post($bookId)->post_title, $bookId);
     * $this->assertQueriesByStatementAndFilter('SELECT', 'the_title');
     * ```
     *
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                          Regular expressions must contain delimiters.
     * @param string $filter The filter name, e.g. 'posts_where'.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesByStatementAndFilter()
     */
    public function assertQueriesByStatementAndFilter($statement, $filter, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesByStatementAndFilter', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that no queries were made as a consequence of the specified filter containing the specified SQL query.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * add_filter('the_title', function($title, $postId){
     *      $post = get_post($postId);
     *      if($post->post_type !== 'book'){
     *          return $title;
     *      }
     *      $new = get_option('acme_new_prefix');
     *      return "{$new} - " . $title;
     * });
     * $title = apply_filters('the_title', get_post($notABookId)->post_title, $notABookId);
     * $this->assertNotQueriesByStatementAndFilter('SELECT', 'the_title');
     * ```
     *
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $filter The filter name, e.g. 'posts_where'.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertNotQueriesByStatementAndFilter()
     */
    public function assertNotQueriesByStatementAndFilter($statement, $filter, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotQueriesByStatementAndFilter', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Asserts that n queries were made as a consequence of the specified filter containing the specified SQL statement.
     *
     * Queries generated by `setUp`, `tearDown` and `factory` methods are excluded by default.
     *
     * @example
     * ```php
     * add_filter('the_title', function($title, $postId){
     *      $post = get_post($postId);
     *      if($post->post_type !== 'book'){
     *          return $title;
     *      }
     *      $new = get_option('acme_new_prefix');
     *      return "{$new} - " . $title;
     * });
     * // Warm up the cache.
     * $title = apply_filters('the_title', get_post($bookOneId)->post_title, $bookOneId);
     * // Cache is warmed up now.
     * $title = apply_filters('the_title', get_post($bookTwoId)->post_title, $bookTwoId);
     * $title = apply_filters('the_title', get_post($bookThreeId)->post_title, $bookThreeId);
     * $this->assertQueriesCountByStatementAndFilter(1, 'SELECT', 'the_title');
     * ```
     *
     * @param int $n The expected number of queries.
     * @param string $statement A simple string the statement should start with or a valid regular expression.
     *                           Regular expressions must contain delimiters.
     * @param string $filter The filter name, e.g. 'posts_where'.
     * @param string $message An optional message to override the default one.
     * @see \Codeception\Module\WPQueries::assertQueriesCountByStatementAndFilter()
     */
    public function assertQueriesCountByStatementAndFilter($n, $statement, $filter, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueriesCountByStatementAndFilter', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Returns the current number of queries.
     * Set-up and tear-down queries performed by the test case are filtered out.
     *
     * @example
     * ```php
     * // In a WPTestCase, using the global $wpdb object.
     * $queriesCount = $this->queries()->countQueries();
     * // In a WPTestCase, using a custom $wpdb object.
     * $queriesCount = $this->queries()->countQueries($customWdbb);
     * ```
     *
     * @param null|\wpdb $wpdb A specific instance of the `wpdb` class or `null` to use the global one.
     *
     * @return int The current count of performed queries.
     * @see \Codeception\Module\WPQueries::countQueries()
     */
    public function countQueries($wpdb = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('countQueries', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Returns the queries currently performed by the global database object or the specified one.
     * Set-up and tear-down queries performed by the test case are filtered out.
     *
     * @example
     * ```php
     * // In a WPTestCase, using the global $wpdb object.
     * $queries = $this->queries()->getQueries();
     * // In a WPTestCase, using a custom $wpdb object.
     * $queries = $this->queries()->getQueries($customWdbb);
     * ```
     *
     * @param null|\wpdb $wpdb A specific instance of the `wpdb` class or `null` to use the global one.
     *
     * @return array An array of queries.
     * @see \Codeception\Module\WPQueries::getQueries()
     */
    public function getQueries($wpdb = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getQueries', func_get_args()));
    }
}
