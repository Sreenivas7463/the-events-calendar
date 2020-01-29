/**
 * Internal dependencies
 */
import * as types from './types';

export const setInitialState = ( entityRecord ) => {
	DEFAULT_STATE.url = entityRecord.meta._EventURL;
};

export const DEFAULT_STATE = {
	url: '',
	label: '',
};

export default ( state = DEFAULT_STATE, action ) => {
	switch ( action.type ) {
		case types.SET_WEBSITE_URL:
			return {
				...state,
				url: action.payload.url,
			};
		case types.SET_WEBSITE_LABEL:
			return {
				...state,
				label: action.payload.label,
			};
		default:
			return state;
	}
};
