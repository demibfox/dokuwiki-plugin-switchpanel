<?php
	class switchpanel_case_sfpplus{
		public static function getSvg( $oCase, $iX, $iY, $opt ){
			$sSvg = '';
			if( isset( $oCase[ 'options' ][ 'link' ] ) ){
				$sSvg .= '<a xlink:href="'.$oCase[ 'options' ][ 'link' ].'" target="'.( isset( $oCase[ 'options' ][ 'target' ] ) ? $oCase[ 'options' ][ 'target' ] : $opt[ 'target' ] ).'" style="text-decoration:none">';
			}
			if( isset( $oCase[ 'options' ][ 'text' ] ) ){
				$sLabel = str_replace( "\\", "\\'", isset( $oCase[ 'label' ] ) ? $oCase[ 'label' ] : '' );
				$sTitle = str_replace( "\\", "\\'", isset( $oCase[ 'title' ] ) ? $oCase[ 'title' ] : '' );
				$sText = str_replace( "\\", "\\'", $oCase[ 'options' ][ 'text' ] );
				$sLink = str_replace( "\\", "\\'", isset( $oCase[ 'options' ][ 'link' ] ) ? $oCase[ 'options' ][ 'link' ] : '' );
				if( isset( $oCase[ 'options' ][ 'textlink' ] ) ){
					$sLink = str_replace( "\\", "\\'", $oCase[ 'options' ][ 'textlink' ] );
				}
				$sSvg .= '<g onmousemove="window.oSwitchPanel.showToolTip(evt, \''.$sLabel.'\', \''.$sTitle.'\', \''.$sText.'\', \''.$sLink.'\')" onmouseout="window.oSwitchPanel.hideToolTip()">';
			}
			
			// Case color
			$sColor = $opt[ 'color' ];
			if( isset( $oCase[ 'options' ][ 'color' ] ) ){
				$sColor = $oCase[ 'options' ][ 'color' ];
			}

			// Label background color
			$sLabelBgColor = $opt[ 'labelBgColor' ];
			if( isset( $oCase[ 'options' ][ 'labelBgColor' ] ) ){
				$sLabelBgColor = $oCase[ 'options' ][ 'labelBgColor' ];
			}

			// Label text color
			$sLabelTxtColor = $opt[ 'labelTxtColor' ];
			if( isset( $oCase[ 'options' ][ 'labelTxtColor' ] ) ){
				$sLabelTxtColor = $oCase[ 'options' ][ 'labelTxtColor' ];
			}
				
			// SFP+ port design - similar to SFP but with + indicator and slightly different styling
			$sSvg .= '<rect x="'.$iX.'" y="'.$iY.'" width="'.$opt[ 'elementWidth' ].'" height="'.$opt[ 'elementHeight' ].'" fill="'.$sColor.'"/>
				<rect x="'.$iX.'" y="'.$iY.'" width="'.$opt[ 'elementWidth' ].'" height="'.( $opt[ 'elementHeight' ] / 2.65 ).'" stroke-width="'.( $opt[ 'elementWidth' ] / 30 ).'" stroke="#000000" fill="'.$sLabelBgColor.'" ry="1.5" rx="1.5"/>
				<text x="'.( $iX + ( $opt[ 'elementWidth' ] / 2 ) ).'" y="'.( $iY + ( $opt[ 'elementHeight' ] / 3.6 ) ).'" style="font-weight:bold;" text-anchor="middle" font-family="sans-serif" font-size="'.( $opt[ 'elementWidth' ] * 0.27 ).'" fill="'.$sLabelTxtColor.'">'.$oCase[ 'label' ].'</text>
				<rect x="'.( $iX + ( $opt[ 'elementWidth' ] / 6 ) ).'" y="'.( $iY + ( $opt[ 'elementHeight' ] / 1.8 ) ).'" width="'.( $opt[ 'elementWidth' ] / 1.5 ).'" height="'.( $opt[ 'elementHeight' ] / 4 ).'" fill="#000000" stroke-width="1" stroke="#333333"/>
				<rect x="'.( $iX + ( $opt[ 'elementWidth' ] / 5 ) ).'" y="'.( $iY + ( $opt[ 'elementHeight' ] / 1.6 ) ).'" width="'.( $opt[ 'elementWidth' ] / 1.67 ).'" height="'.( $opt[ 'elementHeight' ] / 8 ).'" fill="#FFD700"/>
				<text x="'.( $iX + ( $opt[ 'elementWidth' ] / 1.2 ) ).'" y="'.( $iY + ( $opt[ 'elementHeight' ] / 1.15 ) ).'" text-anchor="middle" font-family="sans-serif" font-size="'.( $opt[ 'elementWidth' ] * 0.2 ).'" fill="#FFD700" font-weight="bold">+</text>';
			
			if( isset( $oCase[ 'title' ] ) ){
				$sSvg .= '<text x="'.( $iX + ( $opt[ 'elementWidth' ] / 2 ) ).'" y="'.( $iY + ( $opt[ 'elementHeight' ] / 1.25 ) ).'" text-anchor="middle" font-family="sans-serif" font-size="'.( $opt[ 'elementWidth' ] * 0.3 ).'" fill="#ffffff">'.$oCase[ 'title' ].'</text>';
			}
			if( isset( $oCase[ 'options' ][ 'text' ] ) ){
				$sSvg .= '</g>';
			}
			if( isset( $oCase[ 'options' ][ 'link' ] ) ){
				$sSvg .= '</a>';
			}
			
			return $sSvg;
		}
	}