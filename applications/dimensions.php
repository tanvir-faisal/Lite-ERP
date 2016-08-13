<?php
/**********************************************************************
    Copyright (C) FrontAccounting, LLC.
	Released under the terms of the GNU General Public License, GPL, 
	as published by the Free Software Foundation, either version 3 
	of the License, or (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
    See the License here <http://www.gnu.org/licenses/gpl-3.0.html>.
***********************************************************************/
class dimensions_app extends application
{
	function dimensions_app()
	{
		$dim = get_company_pref('use_dimension');
		$this->application("proj", _($this->help_context = "&Meter Reading"), $dim);

		if ($dim > 0)
		{
			$this->add_module(_("Transactions"));
			$this->add_lapp_function(0, _("Meter Usage"),
				"dimensions/dimension_entry.php?", 'SA_DIMENSION', MENU_ENTRY);
			$this->add_lapp_function(0, _("View Meter Usage"),
				"dimensions/inquiry/search_dimensions.php?outstanding_only=1", 'SA_DIMTRANSVIEW', MENU_TRANSACTION);

			$this->add_module(_("Reports"));
			$this->add_lapp_function(1, _("Reports"),
				"dimensions/inquiry/search_dimensions.php?", 'SA_DIMTRANSVIEW', MENU_INQUIRY);

			
			
			// $this->add_module(_("Maintenance"));
			// $this->add_lapp_function(2, _("Meter Number"),
			// 	"admin/tags.php?type=dimension", 'SA_DIMTAGS', MENU_MAINTENANCE);
			// $this->add_lapp_function(2, _("Meter List"),
			// 	"admin/tags.php?type=dimension", 'SA_DIMTAGS', MENU_MAINTENANCE);
			// $this->add_lapp_function(2, _("Meter Type"),
			// 	"admin/tags.php?type=dimension", 'SA_DIMTAGS', MENU_MAINTENANCE);

			$this->add_extensions();
		}
	}
}

?>