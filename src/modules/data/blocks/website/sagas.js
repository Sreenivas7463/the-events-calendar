/**
 * External Dependencies
 */
import { put, all, takeEvery } from 'redux-saga/effects';

/**
 * Internal dependencies
 */
import * as types from './types';
import { DEFAULT_STATE } from './reducer';
import * as actions from './actions';

export function* setInitialState( action ) {
	const { get } = action.payload;

	yield all( [
		put( actions.setWebsite( get( 'url', DEFAULT_STATE.url ) ) ),
		put( actions.setLabel( get( 'urlLabel', DEFAULT_STATE.label ) ) ),
	] );
}

export default function* watchers() {
	yield takeEvery( types.SET_INITIAL_STATE, setInitialState );
}
