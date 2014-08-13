<?php

class Drazen_Address_Block_Adminhtml_Officelist_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
	protected function _prepareForm()
	{
		$form = new Varien_Data_Form(array(
			'id'     => 'edit_form',
			'action' => $this->getUrl('drazen_address_admin/office/edit', array(
						'_current'  => true,
						'continue' => 0,
					)
				),
			'method' => 'post',
		));

		$form->setUseContainer(true);
		$this->setForm($form);

		$fieldset = $form->addFieldset('general', array('legend' => $this->__('Office Details')));

		$this->_addFieldsToFieldset($fieldset, array(
			'name'     => array(
				'label'    => $this->__('Name'),
				'input'    => 'text',
				'required' => true,
			),
			'address'  => array(
				'label'    => $this->__('Address'),
				'input'    => 'text',
				'required' => true,
			),
			'city'     => array(
				'label'    => $this->__('City'),
				'input'    => 'text',
				'required' => true,
			),
			'postcode' => array(
				'label'   => $this->__('Postcode'),
				'input'   => 'text',
				'required' => true,
			),
			'phone'    => array(
				'label' => $this->__('Phone'),
				'input' => 'text',
			),
			'email'    => array(
				'label' => $this->__('Email'),
				'input' => 'text',
			),
		));
		return $this;
	}

	protected function _addFieldsToFieldset(Varien_Data_Form_Element_Fieldset $fieldset, $fields)
	{
		$requestData = new Varien_Object($this->getRequest()->getPost('officeData'));

		foreach ($fields as $name => $_data) {
			if ($requestValue = $requestData->getData($name)) {
				$_data['value'] = $requestValue;
			}

			$_data['name'] = "officeData[$name]";
			$_data['title'] = $_data['label'];

			if (!array_key_exists('value', $_data)) {
				$_data['value'] = $this->_getOffice()->getData($name);
			}

			$fieldset->addField($name, $_data['input'], $_data);
		}
		return $this;
	}

	private function _getOffice()
	{
		if (!$this->hasData('office')) {
			$office = Mage::registry('current_office');

			/*if (!$office instanceof Drazen_Address_Model_Address) {
				$office = Mage::getModel('drazen_address/address');
			}
*/
			$this->setData('office', $office);
		}

		return $this->getData('office');
	}
}