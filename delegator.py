#thanks to @twinner for this script

from steemdata import SteemData
from collections import Counter
import sys

s = SteemData()

delegations = s.Operations.find( {
    '$and': [
        {'type' : 'delegate_vesting_shares'},
        {'delegatee': sys.argv[1]}
    ]
} )             

delegation_map = dict()

for delegation in delegations:
    delegator = str(delegation['delegator'])
    vestings = delegation['vesting_shares']
    amount = vestings['amount']
    delegation_map[delegator] = amount

i=1

for key in sorted(delegation_map):
    if delegation_map[key] > 0:
        print('|' + str(i) + '|' + key + '|' + str(delegation_map[key])+ '|')
        i += 1
