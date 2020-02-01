/**
 * External dependencies
 */
import { connect } from 'react-redux';
import { compose, bindActionCreators } from 'redux';
import { noop } from 'lodash';

/**
 * Internal dependencies
 */
import {
	actions as dateTimeActions,
	selectors as dateTimeSelectors,
} from '@moderntribe/events/data/blocks/datetime';
import {
	selectors as priceSelectors,
	actions as priceActions,
} from '@moderntribe/events/data/blocks/price';
import { withStore, withSaveData } from '@moderntribe/common/hoc';
import EventDateTimeContent from './template';

/**
 * Module Code
 */

const mapStateToProps = ( state ) => ( {
	allDay: dateTimeSelectors.getAllDay( state ),
	cost: priceSelectors.getPrice( state ),
	currencyPosition: priceSelectors.getPosition( state ),
	currencySymbol: priceSelectors.getSymbol( state ),
	end: dateTimeSelectors.getEnd( state ),
	isEditable: dateTimeSelectors.isEditable( state ),
	multiDay: dateTimeSelectors.getMultiDay( state ),
	sameStartEnd: dateTimeSelectors.getSameStartEnd( state ),
	separatorDate: dateTimeSelectors.getDateSeparator( state ),
	separatorTime: dateTimeSelectors.getTimeSeparator( state ),
	showTimeZone: dateTimeSelectors.getTimeZoneVisibility( state ),
	start: dateTimeSelectors.getStart( state ),
	timeZone: dateTimeSelectors.getTimeZone( state ),
	timeZoneLabel: dateTimeSelectors.getTimeZoneLabel( state ),
} );

const mapDispatchToProps = ( dispatch ) => ( {
	...bindActionCreators( dateTimeActions, dispatch ),
	...bindActionCreators( priceActions, dispatch ),
	setInitialState: noop,
} );

export default compose(
	withStore(),
	connect( mapStateToProps, mapDispatchToProps ),
	withSaveData(),
)( EventDateTimeContent );
