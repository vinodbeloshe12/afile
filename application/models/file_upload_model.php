<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class file_upload_model extends CI_Model
{
public function create($cdate,$pdf)
{
$data=array("cdate" => $cdate,"pdf" => $pdf);
$query=$this->db->insert( "afile_file_upload", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("afile_file_upload")->row();
return $query;
}
function getsinglefile_upload($id){
$this->db->where("id",$id);
$query=$this->db->get("afile_file_upload")->row();
return $query;
}
public function edit($id,$cdate,$pdf,$current_time)
{
if($pdf=="")
{
$pdf=$this->file_upload_model->getimagebyid($id);
$pdf=$pdf->pdf;
}
$data=array("cdate" => $cdate,"pdf" => $pdf,"current_time" => $current_time);
// print_r($data);
$this->db->where( "id", $id );
$query=$this->db->update( "afile_file_upload", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `afile_file_upload` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `pdf` FROM `afile_file_upload` WHERE `id`='$id'")->row();
return $query;
}
public function getdropdown()
{
$query=$this->db->query("SELECT * FROM `afile_file_upload` ORDER BY `id`
                    ASC")->row();
$return=array(
"" => "Select Option"
);
foreach($query as $row)
{
$return[$row->id]=$row->name;
}
return $return;
}
}
?>
