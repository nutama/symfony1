<?php


/**
 * This class defines the structure of the 'author_article' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Sat Feb 12 15:53:44 2011
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class AuthorArticleTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.AuthorArticleTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('author_article');
		$this->setPhpName('AuthorArticle');
		$this->setClassname('AuthorArticle');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('AUTHOR_ID', 'AuthorId', 'INTEGER' , 'author', 'ID', true, null, null);
		$this->addForeignPrimaryKey('ARTICLE_ID', 'ArticleId', 'INTEGER' , 'article', 'ID', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Author', 'Author', RelationMap::MANY_TO_ONE, array('author_id' => 'id', ), null, null);
    $this->addRelation('Article', 'Article', RelationMap::MANY_TO_ONE, array('article_id' => 'id', ), null, null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'false', 'filter' => 'false', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // AuthorArticleTableMap
