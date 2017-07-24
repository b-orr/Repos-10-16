<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

class Fields extends Model
{
    protected $table = 'fields';
    
    protected $fillable = [
        'user_id', 'name', 'page', 'position', 'order',  'type',
    ];
    
    public $fieldTypes = ['radio'=>'Radio', 'checkbox'=>'Checkbox', 'dropdown-single'=>'Dropdown Single', 'dropdown-multiple'=>'Dropdown Multiple', 'text'=>'Text input', 'textarea' => 'Text Area'];

		public $fieldHTML = [
													'radio'=>'<label>{$value} <input {$select} type="radio" name="extraValue[{$id}]" value="{$value}" /></label>  ', 
													'checkbox'=>'<label>{$value} <input {$select} type="checkbox" name="extraValue[{$id}]" value="{$value}" /></label>  ', 
													'dropdown-single'=>'<select  class="form-control" style="width:200px" name="extraValue[{$id}]"></select>', 
													'dropdown-multiple'=>'<select class="form-control" name="extraValue[{$id}]" style="width:200px" multiple></select>', 
													'text'=>'<label> <input class="form-control" type="text" name="extraValue[{$id}]" value="{$value}" /></label>  ', 
													'textarea' => '<label> <textarea class="form-control" name="extraValue[{$id}]">{$value}</textarea></label>'];
		
		public $placeholder_order=0;
		
    public function user()
		{
		   return $this->belongsTo('App\User');
		}

    public function fieldValues()
    {
      return $this->hasMany('App\FieldsValues');
    }
    
    public function fieldRecords()
    {
      return $this->hasMany('App\FieldsRecords');
    }
   
    public function generateField($name, $type, $values, $id='', $fieldValue='')
    {
    	$field='';
    	
	  	if($type=='radio' || $type=='checkbox'){
	  		foreach ($values as $key => $value) {
	  				
	  				$selected=$fieldValue==$value->value?'checked':'';
	  				
	  				$field.=str_replace('{$value}', $value->value, str_replace('{$name}', $name, str_replace('{$id}', $id, str_replace('{$select}', $selected,  $this->fieldHTML[$type]))));
	  		}
	  	}
	  	
	  	
	  	if($type=='dropdown-single' || $type=='dropdown-multiple'){
 
	  		foreach ($values as $key => $value) {
	  				$field.='<option value="'. $value->value . '"   '.($fieldValue==$value->value?'selected':'').'>'. $value->value . '</option>';
	  		}
	  		
	  		$this->fieldHTML[$type] =  str_replace('{$name}', $name, str_replace('{$id}', $id, $this->fieldHTML[$type]));
	  		$field = str_replace('><', '>' . $field . '<', $this->fieldHTML[$type]);
	  		
	  	}
	  	
	  	
	  	if($type=='text' || $type=='textarea'){
	  
	 			@$values[0]->value=$fieldValue!=''?$fieldValue:@$values[0]->value;
	 	 
	  		$field=str_replace('{$value}', @$values[0]->value, str_replace('{$name}', $name, str_replace('{$id}', $id, $this->fieldHTML[$type])));
	  		
	  	}
	  	
	  	return $field;
    }
    
    public function appendFieldModal($values) {
    	
    	$part = '<div class="modal fade" id="appendFieldModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    			<div class="modal-dialog">
    			
    			
    			
    			<form   role="form" method="POST"   action="'. url('/admin/fieldsRecords') .'">
    			'. csrf_field() .'
    			
    			<input type="hidden" name="page_name" id="append_page_name" />
    			<input type="hidden"  name="order" id="append_order" />
    			
     
    			
    				<div class="modal-content">
    					<div class="modal-header">
    						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    							&times;
    						</button>
    						<h4 class="modal-title" id="myModalLabel">Place Fields</h4>
    					</div>
    					<br>
    					<div class="modal-body">
    				 
    					
    				 
    						
    						<div class="row">
    							<div class="col-md-5">
    								<div class="form-group">
    									<h4>Choose a field  </h4>
    								</div>
    							</div>
    							<div class="col-md-7">
    								<div class="form-group">
    								<select  name="fields_id" class="form-control">';
    								
    				foreach($values as $key=>$val){
    					$part.=  '<option value="' .  $val->id . '">['. $val->type . '] ' .  $val->name . ' </option>';
    				}
    								
    								
    					$part.= '</select>
    								 
    								</div>
    							</div>
    						</div>
    						
    						
    						 
    						
    						<br>
    					<div class="modal-footer">
    						<button type="button" class="btn btn-default" data-dismiss="modal">
    							Cancel
    						</button>
    						<button type="submit" class="btn btn-primary">
    							Add Field
    						</button>
    					</div>
    				</div><!-- /.modal-content -->
    			</div><!-- /.modal-dialog -->
    			</form>
    			
    			
    			
    		</div>
    	</div><form action="" method="POST"  style="display: inline;" id="destryFieldForm">
     
    	    '. method_field('DELETE') .'
    	    '. csrf_field() .'
    	 
    	</form>';
    	
    	return $part;
    }
    
    public function fieldTemplate($field, $name, $location) {
    	 if($location=='modal1'){
    	 	
    	 		return '<div class="row">
    	 			<div class="col-md-6">
    	 				<div class="form-group">
    	 					<h4>'.$name.' </h4>
    	 				</div>
    	 			</div>
    	 			<div class="col-md-6">
    	 				<div class="form-group">
    	 				'.$field.'
    	 				</div>
    	 			</div>
    	 		</div>';
    	 
    	 }
    }
    
    public function appendFieldPlaceholder($fields, $location, $fieldValue='') {
    
    	$page_name =  explode('.',  \Request::route()->getName())[0];
    	
    	$fieldValue = json_decode($fieldValue, true);
    	
     	$this->placeholder_order++;
     	$new_field = '<a href="#" data-toggle="modal"  data-target="#appendFieldModal" onclick="$(\'#append_page_name\').val(\''.$page_name.'\'); $(\'#append_order\').val(\''.$this->placeholder_order.'\'); "><small>+</small></a><br/>';
     	
     	foreach ($fields->get() as  $value) {
     		
     		$result = $value->fieldRecords()->where('page_name', $page_name)->where('order', $this->placeholder_order)->get();
     	 
     		if(!$result->isEmpty()){
    
     			 $new_field .= '<a style="float:right"  href="#" onclick="if(confirm(\'Are you sure?\')){ $(\'#destryFieldForm\').attr(\'action\', \''. url('/admin/fieldsRecords/' . $value->id .'|'.$result[0]->id) .'\'); $(\'#destryFieldForm\').submit()}"> &nbsp;<i class="fa fa-trash-o"></i></a>' . $this->fieldTemplate($this->generateField($value->name, $value->type, $value->fieldValues()->get(), $value->id, @$fieldValue[$value->id]), $value->name, $location) .'<form action="'. url('/admin/fieldsRecords/' . $value->id .'|'.$result[0]->id) .'" method="POST"  style="display: inline;">' ;
     		}
     	} 
     	
     	return $new_field ;
    }

}
