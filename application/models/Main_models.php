<?php

class Main_models extends CI_Model
{

    // READ
    function data_news()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('queue_news != ', '0');
        $this->db->order_by('idnews', 'DESC');
        $this->db->limit(4);
        return $query = $this->db->get();
    }

    function tableWhere($where, $table)
    {
        return $query = $this->db->get_where($table, $where);
    }

    public function update($username, $data, $table)
    {
        //id apa yang mau di update, lalu DATA apa yang mau dikirim ke tabel di database
        $this->db->where('iduser', $username);
        $this->db->update($table, $data);
    }

    function detail_news($where, $table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('idnews', $where);
        $this->db->join('category', 'category.idcategory = news.idcategory');
        return $query = $this->db->get();
        //$data['data1'] = $this->db->query("SELECT * FROM category WHERE status_category = '1'");
    }

    function get_category($where, $table)
    {
        return $query = $this->db->get_where($table, $where);
    }

    function data($number, $offset)
    {
        return $query = $this->db->get('news', $number, $offset)->result();
    }

    function jumlah_data_news()
    {
        return $this->db->get('news')->num_rows();
    }
    function jumlah_data_usaha()
    {
        return $this->db->get('agenda')->num_rows();
    }
    function jumlah_data_team()
    {
        return $this->db->get('pimpinan')->num_rows();
    }
    function jumlah_data_testi()
    {
        return $this->db->get('testimonials')->num_rows();
    }

    public function find_title($keyword)
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->like('title_news', $keyword);
        $this->db->or_like('detail_news', $keyword);
        return $query = $this->db->get();
    }

    public function all_data($table)
    {
        return $this->db->get($table);
    }

    public function dataLimit($table, $limit, $where, $type)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($where, $type);
        $this->db->limit($limit);
        return $query = $this->db->get();
    }

    function joinTable($table, $join1, $join2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($join1, $join2);
        return $query = $this->db->get();
        //$data['data1'] = $this->db->query("SELECT * FROM category WHERE status_category = '1'");
    }

    public function edit($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function deleteData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function getData($where, $table)
    {
        return $query = $this->db->get_where($table, $where);
    }
}
