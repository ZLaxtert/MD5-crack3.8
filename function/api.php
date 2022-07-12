<?php

/* =======================
 * CODE BY ZLAXTERT
 * HASH CRACK V3.8
 * APIs FROM BANDITCODING
 * ======================
*/

// DON'T CHANGE
//====================> THIS IS API
$SISTEMIT_COM_ENC = "3dW5qqxIHAbwfGBe4nCDuXTgvnE5Qbu3a7uUW3JBwQYtRTtp9b3uAzVCB4qBgZEI0+dk8woTFtT/V9T3UdTff/3wLp4vmRf/t2CbvyVL+PP554NYPWZup0w+5w/kxVOzL8pKoJEqFSxzVcyIa6xphVi3y0Uk4Dl9njhMnW8SWBYvtDt90ezyhDGLPuwvLjheCGlgJy5LwUUmTDk6Qsa3GNKEyEHQYwfrGiDb1iPTq2awCfTceqH20MjEZsNPogw23NG5rNM3/CG5Y1w/OXEVjRGOjUak/NldLTeamCJktl1DulvdbYMaKVE675Z5izyFLaYS+tmtuw7gqTBb3HfU1ZLOinAK0FjBbRLRLhRXNA9qjdO4YHuJrua01UkU5K5aneoWwXol7EjUXGilOe0oIsqhcz9TF1MV7evjuD6mMQwxU8OnaS2IPJKYZQ0EkkeS173jp8NwmWDL0oeI21oGSeq1j1wd2hyKIVupCLxN6ZHUGApOKdQpHepSSzl5ORj35FRaULFG1p3VrdIosg/8i9SxzVXWc2HBE0y7jNsAhka1FGahLXQfrc45w7yLlwDiRXeMkRXY2uXWJAcKko7Dmuhhnp3KptfmMjM9QhfPGR+2lAJCRlWx4KlmFVP7Gu0ZKbvhNtKKZYGe94M1o1fszNzDByuPA4Hc6Wsj9n0uqRbDPaleVE+kIcmedJ3i49bnqN5jt0pUkiaEKKQ2MK4u6NudxuqG3GAFXhuEZshEGeM5i1w9Sm7pmoLRenYJWngOXjZVADuxnjZmM1WlcSLLtlNOLbb4NNqY1zAu8uyF4AQLf1c68a8ZISc/a8uOSbFZb+9hy/e6SwXraTwszbfuYca2Sw2KtiYL5h7PUUKRmlO2lVjLQZHRY4w2/H5jdfZ12G1Sn4NUkW9LL7GvrpZ9tLkCeXk+U7mWyRbRhiwUHij7YGLAMvKtYk+EOEVDQOpj/8i5q4c0e8CcUklwpXLBFTa7W8mK9uZynT3fkcUskgT/8HcxZ3b/PBmCXoJDShP3fhGhuWMzXUP2cZ2HRfB7YdIlY0gxcF1paadurGWSqnIVaAe9rZcX6mI3DjE45xQEcZVqc9KYJXxJyaOi+9K2iSK3tigzqLhswvqkQuzMJmiv3oQVlPC0dzLUQfokxE6EW3Acz0TVtJEM5EYkRMON5uKGWqKbBa8udpxGcHwHMRYKuxPskXv9A9HhgMTsZBEjteZhNvgWfVC0u1ZsfjEoDuYQ1TyiUnQTeb9k1Tkbnqr0A/5C/Nnpl0aH9wXcb21rSwh7EmHuVlFxDZuh5IR4eWQ7gjnh6EurM5v7nqXNbcvNhEz55pxD1ZOTnWsJXorFizV0tNpx6UoisAuDHKGZ+5TpBMciBMnXKsPiCLUy07Vmkf2Vf/z6cd/q9TPdXjtN/l737Lnu/3x4ZYZtits4PtRc3MHjIMPSUFPdgt8AvjRhsNipRLWgSjYXS9q40LxUmkQAXT8oqQBA0HkwUWzgAlOUq/cac6XJ34ZVAiGnO5h833BzAPXbF/k6IGBlgoZacRLfQ2vw5slKy05MilXfo3W0ZKvI0OfhhpTp4Mnk1ZBIi9WPCUs3Bv6djFVl3/MUCnC39Ins4aGWu6GN7kkNEZerlWB8mOFUAvC3X2j3b1+Uv/0Qfvu9rXz57v3bryzqyzer9csvzfLbL52v+RryKVxAhlJigk+6Byw+QaEI6iAJZVgD2RL2yr14VVKkQfJ1vrLBxn/vLUxMo96e976nuiuN6WAa9s4zySSOML8yDCc9hMu2KdqXPacg7j3MHa7O5+fHz1/7scF//lvXd4U/f/764fn29fPj//J/ffz6+69/AQ==";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==");eval(base64_decode($rand));$STOP="HAbwfGBe4nCDuXTgvnE5Qbu3a7uUW3JBwQYtRTtp9b3uAzVCB4qBgZEI0+dk8woTFtT/V9T3UdTff/3wLp4vmRf/t2CbvyVL+PP554NYPWZup0w+5w/kxVOzL8pKoJEqFSxzVcyIa6xphVi3y0Uk4Dl9njhMnW8SWBYvtDt90ezyhDGLPuwvLjheCGlgJy5LwUUmTDk6";

?>