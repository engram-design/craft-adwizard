<?php
namespace Craft;

class AdWizardVariable
{

	// Display specified ad
	public function displayAd($id, $transform = null, $retina = false)
	{
		return craft()->adWizard->renderAd($id, $transform, $retina);
	}

	// Display random ad from specified ad group
	public function randomizeAdGroup($group, $transform = null, $retina = false)
	{
		return craft()->adWizard->renderRandomAdFromGroup($group, $transform, $retina);
	}

	// ============================================================== //

	// DEPRECATED
	public function ad($id, $transform = null, $retina = false)
	{
		return $this->displayAd($id, $transform, $retina);
	}

	// DEPRECATED
	public function position($group, $transform = null, $retina = false)
	{
		return $this->randomizeAdGroup($group, $transform, $retina);
	}

	// ============================================================== //

	// Get all ads
	public function getAllAds()
	{
		return craft()->adWizard->getAllAds();
	}

	// Get all positions
	public function getAllPositions()
	{
		return craft()->adWizard->getAllPositions();
	}

	// Get position by id
	public function getPositionById($positionId)
	{
		return craft()->adWizard->getPositionById($positionId);
	}

	// ============================================================== //

	// Get month total of views
	public function monthTotalViews($id, $year, $month)
	{
		return craft()->adWizard->monthTotalViews($id, $year, $month);
	}

	// Get month total of clicks
	public function monthTotalClicks($id, $year, $month)
	{
		return craft()->adWizard->monthTotalClicks($id, $year, $month);
	}

}