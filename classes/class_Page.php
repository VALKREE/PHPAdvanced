<?php	include_once('models/model.php');	class class_Page extends class_Base{		public function action_index(){			$this->title .= '::Чтение';			$text = text_get();			$this->content = $this->Template('views/view_index.php', array('text' => $text));			}				public function action_edit(){			$this->title .= '::Редактирование';						if($this->isPost())			{				text_set($_POST['text']);				header('location: index.php');				exit();			}						$text = text_get();			$this->content = $this->Template('views/view_edit.php', array('text' => $text));				}	}?>