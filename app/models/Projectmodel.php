<?php
class Projectmodel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    // CRUD

    public function getCategoriesByProjectId($id)
    {
        $this->db->query('SELECT * FROM project_categories
        WHERE project_id = :id');
        $this->db->bind(':id', $id);
        $results = $this->db->resultSet();
        return $results;
    }

    public function getCategoriesByProjectSlug($slug)
    {
        $this->db->query('SELECT * FROM project_categories
        INNER JOIN projects on project_categories.project_id = projects.id
        INNER JOIN categories on categories.category_id = project_categories.category_id
        WHERE project_slug = :slug');
        $this->db->bind(':slug', $slug);
        $results = $this->db->resultSet();
        return $results;
    }


    // Delete project category
    public function deleteProjectCategory($category_id, $project_id)
    {
        // Prepare Query
        $this->db->query('DELETE FROM project_categories WHERE category_id = :category_id AND project_id = :project_id');

        // Bind Values
        $this->db->bind(':category_id', $category_id);
        $this->db->bind(':project_id', $project_id);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // get the last id inserted
    public function getId()
    {
        $project_id = $this->db->lastInsertId();
        return $project_id;
    }

    // Add Project
    public function addProject($data)
    {
        // Prepare Query
        $this->db->query('INSERT INTO projects (project_name, project_description, project_sm_image, project_lg_image, project_url, project_comments, project_slug) VALUES (:name, :description, :small_image, :large_image, :url, :comments, :slug)');

        // Bind Values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':small_image', $data['small_image']);
        $this->db->bind(':large_image', $data['large_image']);
        $this->db->bind(':url', $data['url']);
        $this->db->bind(':comments', $data['comments']);
        $this->db->bind(':slug', $data['slug']);
        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

     
    // Get all projects
    public function getProjects()
    {
        $this->db->query('SELECT * FROM projects');

        $results = $this->db->resultSet();

        return $results;
    }

    // Get first 4 projects
    public function getFirstProjects()
    {
        $this->db->query('SELECT * FROM projects ORDER BY id ASC limit 4 ');

        $results = $this->db->resultSet();

        return $results;
    }

    // Get Project By ID
    public function getProjectById($id)
    {
        $this->db->query("SELECT * FROM projects WHERE id = :id");

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;

    }

    // Get Project By Slug
    public function getProjectBySlug($slug)
    {
        $this->db->query("SELECT * FROM projects WHERE project_slug = :slug");

        $this->db->bind(':slug', $slug);

        $row = $this->db->single();

        return $row;
    }

   
    // Update Project
    public function updateProject($data)
    {
        // Prepare Query
        $this->db->query('UPDATE projects SET project_name = :name, project_description = :description, project_sm_image = :small_image, project_lg_image = :large_image, project_url = :url, project_comments = :comments , project_slug = :slug WHERE id = :id');

        // Bind Values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':small_image', $data['small_image']);
        $this->db->bind(':large_image', $data['large_image']);
        $this->db->bind(':url', $data['url']);
        $this->db->bind(':comments', $data['comments']);
        $this->db->bind(':slug', $data['slug']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // add project categories
    public function addProjectCategory($category, $project_id)
    {
        // Prepare Query
        $this->db->query('INSERT INTO project_categories (category_id, project_id) VALUES (:category, :project_id)');

        // Bind Values
        $this->db->bind(':category', $category);
        $this->db->bind(':project_id', $project_id);
        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteProject($id){
        $this->db->query('DELETE from projects WHERE id = :id');

        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    

}
