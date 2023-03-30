<?php 

Class Blog {
    public function getAllBlog(){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select('*')
                      ->from('blogs')
                      ->where('status',1)
                      ->get();
        return $get->result_array();
                      
    }

    function getActiveBlog(){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select('*')
                      ->from('blogs')
                      ->where('status',1)
                      ->where('isPublished',1)
                      ->get();
        return $get->result_array();
    }

    function getActiveBlogImage(){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select('*')
                    ->from('blogs')
                    ->join('blogsimgs', 'blogsimgs.blogId = blogs.blogId','left')
                    ->where('blogs.isPublished',1)
                    ->where('blogs.status',1)
                    ->order_by('blogs.blogId', 'DESC')
                    ->get();
        return $get->result_array();
    }


    public function getBlogFromId($id){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select('*')
                      ->from('blogs')
                      ->join('blogsimgs', 'blogsimgs.blogId = blogs.blogId','left')
                      ->where('blogs.blogId',$id)
                      ->get();
        return $get->result_array();
                      
    }

  

   
}