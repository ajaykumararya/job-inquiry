<?php
class Job extends Ajax_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function add_category()
    {
        $this->db->insert('job_category', $this->post());
        $this->response('status', true);
        $this->response('html', 'Category Added Successfully...');
    }
    function list_category()
    {
        $data = [];
        $get = $this->db->get('job_category');
        if($get->num_rows()){
            foreach($get->result_array() as $row){
                $row['set_in_page'] = $this->ki_theme->drawer_button('job_category',$row['job_category_id'],$row['title']);
                $data[] = $row;
            }
        }
        //set_in_page
        $this->response('data',$data);
    }
    function delete_category($id)
    {
        $get = $this->db->get('job_sub_category', ['job_category_id' => $id]);
        if ($get->num_rows()) {
            $this->response('error', 'Delete their ' . $get->num_rows() . ' Sub Categories First..');
        } else {
            $this->db->delete('job_category', ['job_category_id' => $id]);
            $this->response('status', true);
            $this->response('html', 'Category Delete Successfully..');
        }
    }
    function edit_category()
    {
        $this->db->update('job_category', [
            'title' => $this->post('title')
        ], [
            'job_category_id' => $this->post('id')
        ]);
        $this->response('sql', $this->db->last_query());
        $this->response('status', true);
    }


    function add_sub_category()
    {
        $this->db->insert('job_sub_category', $this->post());
        $this->response('status', true);
        $this->response('html', 'Sub Category Added Successfully...');
    }
    function list_sub_category()
    {

        $this->db->from('job_sub_category as jsc')
            ->join('job_category as jc', 'jsc.job_category_id = jc.job_category_id');
        if ($job_category_id = $this->post('job_category_id'))
            $this->db->where('jc.job_category_id', $job_category_id);
        $get = $this->db->get();
        $data = $get->result_array();
        $this->response('data', $data);
        $html = ' ';
        if ($job_category_id && $get->num_rows()) {
            $this->response('status', true);
            $html = $this->set_data('data', $data)->template('sub-category-list');
        }
        $this->response('html', $html);
    }
    function delete_sub_category($id)
    {
        $get = $this->db->get('jobs', ['job_sub_category_id' => $id]);
        if ($get->num_rows()) {
            $this->response('html', 'Delete their ' . $get->num_rows() . ' Jobs First..');
        } else {
            $this->db->delete('job_sub_category', ['job_sub_category_id' => $id]);
            $this->response('status', true);
            $this->response('html', 'Sub Category Delete Successfully..');
        }
    }
    function edit_sub_category()
    {
        $this->db->update('job_sub_category', [
            'sub_title' => $this->post('sub_title')
        ], [
            'job_sub_category_id' => $this->post('id')
        ]);
        $this->response('sql', $this->db->last_query());
        $this->response('status', true);
    }


    function add()
    {
        $image = $this->file_up('image');
        if ($image) {
            $data = [
                'job_sub_cats' => json_encode($_POST['sub_cats']),
                'job_title' => $this->post('comapny_title'),
                'job_icon' => $image,
                'job_category_id' => $this->post('job_category_id')
            ];
            $this->response('status', $this->db->insert('jobs', $data));
        }
    }
    function delete(){
        $this->response('status',$this->db->where('job_id',$this->post('id')->delete('jobs')));
    }
}
?>