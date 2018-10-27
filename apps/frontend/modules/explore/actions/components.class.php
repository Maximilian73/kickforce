<?php

class exploreComponents extends sfComponents
{
    /**
     * Main block
     *
     * Categories List
     */
    public function executeMain_categoriesList(sfWebRequest $request)
    {
        $this->categories = ProjectCategoryTable::getAllCategoriesList();
    }

    /**
     * Main block
     *
     * Projects List
     */
    public function executeMain_projectsList(sfWebRequest $request)
    {
        $this->projects = ProjectTable::getProjectsList($request);
    }

    /**
     * Explore block
     *
     * Categories List
     */  
    public function executeExplore_categoriesList(sfWebRequest $request)
    {
        $this->categories = ProjectCategoryTable::getCategoriesList();
    }

    /**
     * Explore block
     *
     * Projects List
     */
    public function executeExplore_projectsList(sfWebRequest $request)
    {
        $this->projects = ProjectTable::getProjectsList($request);
    }

    /**
     * Explore block
     *
     * Category
     */
    public function executeExplore_category(sfWebRequest $request)
    {
        $this->category = ProjectCategoryTable::getCategory($request);
        echo get_partial('explore/partials/category',array('name'=>$request->getParameter('slug_1') ? $this->category->getName() : 'All Projects'));
    }

}
