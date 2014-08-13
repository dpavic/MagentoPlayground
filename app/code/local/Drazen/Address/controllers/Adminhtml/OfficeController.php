<?php

class Drazen_Address_Adminhtml_OfficeController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
	{
		$officeBlock = $this->getLayout()->createBlock('drazen_address_adminhtml/officelist');
		//var_dump($officeBlock);
		$this->loadLayout()->_addContent($officeBlock)->renderLayout();
	}

	public function editAction()
	{
		$office = Mage::getModel('drazen_address/address');
		if ($officeId = $this->getRequest()->getParam('id', false)) {
			$office->load($officeId);

			if ($office->getId() < 1) {
				$this->_getSession()->addError($this->__('This office no longer exists in database'));
				return $this->_redirect('drazen_address_admin/office/index');
			}
		}

		if ($postData = $this->getRequest()->getPost('officeData')) {
			try {
				$office->addData($postData);
				$office->save();
				$this->_getSession()->addSuccess($this->__('The office has been saved.'));

				return $this->_redirect('drazen_address_admin/office/edit', array('id' => $office->getId()));
			} catch (Exception $e) {
				Mage::logException($e);
				$this->_getSession()->addError($e->getMessage());
			}
		}

		Mage::register('current_office', $office);

		$officeEditBlock = $this->getLayout()->createBlock('drazen_address_adminhtml/officelist_edit');

		$this->loadLayout()->_addContent($officeEditBlock)->renderLayout();
	}

	public function deleteAction()
	{
		$office = Mage::getModel('drazen_address/address');
		if ($officeId = $this->getRequest()->getParam('id', false)) {
			$office->load($officeId);
		}

		if ($office->getId() < 1) {
			$this->_getSession()->addError($this->__('This office lo longer exists in database.'));
			return $this->_redirect('drazen_address_admin/office/index');
		}

		try {
			$office->delete();
			$this->_getSession()->addSuccess($this->__('The office has been deleted.'));
		} catch (Exception $e) {
			Mage::logException($e);
			$this->_getSession()->addError($e->getMessage());
		}

		return $this->_redirect('drazen_address_admin/office/index');
	}

}