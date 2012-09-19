
  function ClearList(OptionList, TitleName) 
    {   
    OptionList.length = 0;
    }

  function move(side, form_name)
	  {   
	   var temp1 = new Array();
	   var temp2 = new Array();
	   var current1 = 0;
	   var current2 = 0;
	   var attribute;
		
		//assign what select attribute treat as attribute1 and attribute2
	  if (side == "right")
  		{  
  		 attribute1 = document.getElementById('category_name'); 
  		 attribute2 = document.getElementById('category_selected');
  		}
		else
  		{  
  		 attribute2 = document.getElementById('category_name'); 
  		 attribute1 = document.getElementById('category_selected');
  		}
		
		//fill an array with old values
		for (var i = 0; i < attribute2.length; i++)
		  { 
		  temp1[current1++] = attribute2.options[i].value;
		  }
		  
		//assign new values to arrays
		for (var i = 0; i < attribute1.length; i++)
		  {   
		  if (attribute1.options[i].selected)
		    {  
		     temp1[current1++] = attribute1.options[i].value;
			  }
			else
			  {  
			  temp2[current2++] = attribute1.options[i].value;
			  }
		  }
		
		//generating new options 
		for (var i = 0; i < temp1.length; i++)
			{  
			 attribute2.options[i] = new Option();
			 attribute2.options[i].value = temp1[i];
			 attribute2.options[i].text =  temp1[i];
			}
			
			//generating new options
			ClearList(attribute1,attribute1);
			if (temp2.length>0)
				{	
				  for (var i = 0; i < temp2.length; i++)
					{   
					 attribute1.options[i] = new Option();
					 attribute1.options[i].value = temp2[i];
					 attribute1.options[i].text =  temp2[i];
					}
				}
				
	}
	

