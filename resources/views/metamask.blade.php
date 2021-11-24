<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link rel="stylesheet" href="{{ asset('try.css') }}">
</head>
<body>
<button class="enableEthereumButton btn">Enable Ethereum</button>
<button class="sendEthButton btn">Send Eth</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web3/3.0.0-rc.5/web3.min.js"></script>
<script>
    const ethereumButton = document.querySelector('.enableEthereumButton');
    const sendEthButton = document.querySelector('.sendEthButton');

    let accounts = [];

    //Sending Ethereum to an address
    sendEthButton.addEventListener('click', () => {
        ethereum
            .request({
                method: 'eth_sendTransaction',
                params: [
                    {
                        gasPrice: '', // customizable by user during MetaMask confirmation.
                        gas: '', // customizable by user during MetaMask confirmation.
                        to: 'other_id', // Required except during contract publications.
                        from: accounts[0], // must match user's active address.
                        value: '0x29a2241af', // Only required to send ether to the recipient from the initiating external account.
                    },
                ],
            })
            .then((txHash) => console.log(txHash))
            .catch((error) => console.error);
    });

    ethereumButton.addEventListener('click', () => {
        getAccount();
    });

    async function getAccount() {
        accounts = await ethereum.request({ method: 'eth_requestAccounts' });
    }
</script>
</body>
</html>
